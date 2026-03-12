<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index() {
        $posts = Post::latest()->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    public function create() {
        return view('admin.posts.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title'            => 'required|string|max:255',
            'content'          => 'required|string',
            'meta_title'       => 'nullable|string|max:60',
            'meta_description' => 'nullable|string|max:160',
            'featured_image'   => 'nullable|image|max:4096',
            'gallery_images.*' => 'nullable|image|max:4096',
            'og_image'         => 'nullable|image|max:4096',
        ]);

        // Featured image
        $featuredPath = null;
        if ($request->hasFile('featured_image')) {
            $featuredPath = $request->file('featured_image')->store('posts', 'public');
        }

        // OG image
        $ogPath = null;
        if ($request->hasFile('og_image')) {
            $ogPath = $request->file('og_image')->store('posts/og', 'public');
        }

        // Gallery images
        $galleryPaths = [];
        if ($request->hasFile('gallery_images')) {
            foreach ($request->file('gallery_images') as $img) {
                $galleryPaths[] = $img->store('posts/gallery', 'public');
            }
        }

        Post::create([
            'title'            => $request->title,
            'slug'             => Str::slug($request->title),
            'excerpt'          => $request->excerpt,
            'content'          => $request->input('content'),
            'featured_image'   => $featuredPath,
            'gallery_images'   => $galleryPaths,
            'og_image'         => $ogPath,
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
            'tags'             => $request->tags,
            'focus_keyword'    => $request->focus_keyword,
            'status'           => $request->status ?? 'draft',
            'published_at'     => $request->status == 'published' ? now() : null,
            'user_id'          => auth()->id(),
        ]);

        return redirect()->route('admin.posts.index')->with('success', 'Post created! ✅');
    }

    public function edit(Post $post) {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post) {
        $request->validate([
            'title'            => 'required|string|max:255',
            'meta_title'       => 'nullable|string|max:60',
            'meta_description' => 'nullable|string|max:160',
            'featured_image'   => 'nullable|image|max:4096',
            'gallery_images.*' => 'nullable|image|max:4096',
            'og_image'         => 'nullable|image|max:4096',
        ]);

        // Featured image
        $featuredPath = $post->featured_image;
        if ($request->hasFile('featured_image')) {
            if ($featuredPath) Storage::disk('public')->delete($featuredPath);
            $featuredPath = $request->file('featured_image')->store('posts', 'public');
        }

        // OG image
        $ogPath = $post->og_image;
        if ($request->hasFile('og_image')) {
            if ($ogPath) Storage::disk('public')->delete($ogPath);
            $ogPath = $request->file('og_image')->store('posts/og', 'public');
        }

        // Gallery images
        $galleryPaths = $post->gallery_images ?? [];
        if ($request->hasFile('gallery_images')) {
            foreach ($request->file('gallery_images') as $img) {
                $galleryPaths[] = $img->store('posts/gallery', 'public');
            }
        }

        // Delete specific gallery image
        if ($request->delete_gallery) {
            foreach ($request->delete_gallery as $path) {
                Storage::disk('public')->delete($path);
                $galleryPaths = array_filter($galleryPaths, fn($p) => $p !== $path);
            }
        }

        $post->update([
            'title'            => $request->title,
            'slug'             => Str::slug($request->title),
            'excerpt'          => $request->excerpt,
            'content'          => $request->input('content'),
            'featured_image'   => $featuredPath,
            'gallery_images'   => array_values($galleryPaths),
            'og_image'         => $ogPath,
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
            'tags'             => $request->tags,
            'focus_keyword'    => $request->focus_keyword,
            'status'           => $request->status ?? 'draft',
            'published_at'     => $request->status == 'published' ? ($post->published_at ?? now()) : null,
        ]);

        return redirect()->route('admin.posts.index')->with('success', 'Post updated! ✅');
    }

    public function destroy(Post $post) {
        if ($post->featured_image) Storage::disk('public')->delete($post->featured_image);
        if ($post->og_image) Storage::disk('public')->delete($post->og_image);
        if ($post->gallery_images) {
            foreach ($post->gallery_images as $img) {
                Storage::disk('public')->delete($img);
            }
        }
        $post->delete();
        return back()->with('success', 'Post deleted!');
    }
}