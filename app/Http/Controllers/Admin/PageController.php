<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
            'content'          => 'nullable|string',
            'meta_title'       => 'nullable|string|max:60',
            'meta_description' => 'nullable|string|max:160',
        ]);

        Page::create([
            'title'            => $request->title,
            'slug'             => Str::slug($request->title),
            'content'          => $request->input('content', ''),
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
            'is_active'        => $request->has('is_active'),
        ]);

        return redirect()->route('admin.pages.index')
                         ->with('success', 'Page successfully created! ✅');
    }

    public function edit(Page $page) {
        return view('admin.pages.edit', compact('page'));
    }

    public function update(Request $request, Page $page) {
        $request->validate([
            'title'            => 'required|string|max:255',
            'content'          => 'nullable|string',
            'meta_title'       => 'nullable|string|max:60',
            'meta_description' => 'nullable|string|max:160',
        ]);

        $page->update([
            'title'            => $request->title,
            'slug'             => Str::slug($request->title),
            'content'          => $request->input('content', ''),
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
            'is_active'        => $request->has('is_active'),
        ]);

        return redirect()->route('admin.pages.index')
                         ->with('success', 'Page updated! ✅');
    }

    public function destroy(Page $page) {
        $page->delete();
        return back()->with('success', 'Page deleted!');
    }
}