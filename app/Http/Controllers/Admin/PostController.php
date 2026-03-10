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
            'featured_image'   => 'nullable|image|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('featured_image')) {
            $imagePath = $request->file('featured_image')->store('posts', 'public');
        }

        Post::create([
            'title'            => $request->title,
            'slug'             => Str::slug($request->title),
            'excerpt'          => $request->excerpt,
            'content'          => $request->content,
            'featured_image'   => $imagePath,
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
            'status'           => $request->status,
            'published_at'     => $request->status == 'published' ? now() : null,
            'user_id'          => auth()->id(),
        ]);

        return redirect()->route('admin.posts.index')
                         ->with('success', 'Post created! ✅');
    }

    public function edit(Post $post) {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post) {
        $request->validate([
            'title'            => 'required|string|max:255',
            'meta_title'       => 'nullable|string|max:60',
            'meta_description' => 'nullable|string|max:160',
            'featured_image'   => 'nullable|image|max:2048',
        ]);

        $imagePath = $post->featured_image;
        if ($request->hasFile('featured_image')) {
            if ($imagePath) Storage::disk('public')->delete($imagePath);
            $imagePath = $request->file('featured_image')->store('posts', 'public');
        }

        $post->update([
            'title'            => $request->title,
            'slug'             => Str::slug($request->title),
            'excerpt'          => $request->excerpt,
            'content'          => $request->content,
            'featured_image'   => $imagePath,
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
            'status'           => $request->status,
            'published_at'     => $request->status == 'published' ? now() : null,
        ]);

        return redirect()->route('admin.posts.index')
                         ->with('success', 'Post updated! ✅');
    }

    public function destroy(Post $post) {
        if ($post->featured_image) {
            Storage::disk('public')->delete($post->featured_image);
        }
        $post->delete();
        return back()->with('success', 'Post deleted!');
    }
}