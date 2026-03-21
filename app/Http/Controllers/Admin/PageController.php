<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function index() {
        $pages = Page::latest()->paginate(10);
        return view('admin.pages.index', compact('pages'));
    }

    public function create() {
        return view('admin.pages.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title'            => 'required|string|max:255',
            'slug'             => 'required|string|max:255|unique:pages,slug',
            'heading'          => 'nullable|string|max:255',
            'content'          => 'nullable|string',
            'featured_image'   => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'banner_image'     => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'icon_image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:1024',
            'og_image'         => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'gallery_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'meta_title'       => 'nullable|string|',
            'meta_description' => 'nullable|string|',
            'canonical_url'    => 'nullable|string|',
            'og_title'         => 'nullable|string|max:255',
            'og_description'   => 'nullable|string',
            'robots'           => 'nullable|string|max:100',
        ]);

        $data = [
            'title'            => $request->title,
            'slug'             => Str::slug($request->slug),
            'heading'          => $request->heading,
            'content'          => $request->input('content', ''),
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
            'canonical_url'    => $request->canonical_url,
            'og_title'         => $request->og_title,
            'og_description'   => $request->og_description,
            'robots'           => $request->robots ?? 'index, follow',
            'is_active'        => $request->input('is_active', 0),
        ];

        // Single Images
        foreach (['featured_image', 'banner_image', 'icon_image', 'og_image'] as $field) {
            if ($request->hasFile($field)) {
                $folder = str_replace('_image', '', $field);
                $data[$field] = $request->file($field)->store("pages/{$folder}", 'public');
            }
        }

        // Gallery (multiple)
        $gallery = [];
        if ($request->hasFile('gallery_images')) {
            foreach ($request->file('gallery_images') as $img) {
                $gallery[] = $img->store('pages/gallery', 'public');
            }
        }
        $data['gallery_images'] = !empty($gallery) ? $gallery : null;

        Page::create($data);

        return redirect()->route('admin.pages.index')
                         ->with('success', 'Page created successfully! ✅');
    }

    public function edit(Page $page) {
        return view('admin.pages.edit', compact('page'));
    }

    public function update(Request $request, Page $page) {
        $request->validate([
            'title'            => 'required|string|max:255',
            'slug'             => 'required|string|max:255|unique:pages,slug,' . $page->id,
            'heading'          => 'nullable|string|max:255',
            'content'          => 'nullable|string',
            'featured_image'   => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'banner_image'     => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'icon_image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:1024',
            'og_image'         => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'gallery_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'meta_title'       => 'nullable|string',
            'meta_description' => 'nullable|string|max:160',
            'canonical_url'    => 'nullable|string|max:255',
            'og_title'         => 'nullable|string|max:255',
            'og_description'   => 'nullable|string',
            'robots'           => 'nullable|string|max:100',
        ]);

        $data = [
            'title'            => $request->title,
            'slug'             => Str::slug($request->slug),
            'heading'          => $request->heading,
            'content'          => $request->input('content', ''),
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
            'canonical_url'    => $request->canonical_url,
            'og_title'         => $request->og_title,
            'og_description'   => $request->og_description,
            'robots'           => $request->robots ?? 'index, follow',
            'is_active'        => $request->input('is_active', 0),
        ];

        // Single Images — replace or remove
        foreach (['featured_image', 'banner_image', 'icon_image', 'og_image'] as $field) {
            if ($request->hasFile($field)) {
                if ($page->$field) Storage::disk('public')->delete($page->$field);
                $folder = str_replace('_image', '', $field);
                $data[$field] = $request->file($field)->store("pages/{$folder}", 'public');
            } elseif ($request->has("remove_{$field}")) {
                if ($page->$field) Storage::disk('public')->delete($page->$field);
                $data[$field] = null;
            }
        }

        // Gallery — keep existing + delete selected + add new
        $gallery = $page->gallery_images ?? [];

        // Delete selected gallery images
        if ($request->has('delete_gallery') && is_array($request->delete_gallery)) {
            foreach ($request->delete_gallery as $imgPath) {
                Storage::disk('public')->delete($imgPath);
                $gallery = array_filter($gallery, fn($i) => $i !== $imgPath);
            }
            $gallery = array_values($gallery);
        }

        // Add new gallery images
        if ($request->hasFile('gallery_images')) {
            foreach ($request->file('gallery_images') as $img) {
                $gallery[] = $img->store('pages/gallery', 'public');
            }
        }

        $data['gallery_images'] = !empty($gallery) ? array_values($gallery) : null;

        $page->update($data);

        return redirect()->route('admin.pages.index')
                         ->with('success', 'Page updated! ✅');
    }

    public function destroy(Page $page) {
        // Delete all images from storage
        foreach (['featured_image', 'banner_image', 'icon_image', 'og_image'] as $field) {
            if ($page->$field) Storage::disk('public')->delete($page->$field);
        }
        if ($page->gallery_images) {
            foreach ($page->gallery_images as $img) {
                Storage::disk('public')->delete($img);
            }
        }
        $page->delete();
        return back()->with('success', 'Page deleted! ✅');
    }
}