<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SeoSetting;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function index() {
        $pages = [
            'home'        => 'Home Page',
            'about'       => 'About Us',
            'services'    => 'Services',
            'contact'     => 'Contact',
            'blog'        => 'Blog',
        ];

        $seoData = [];
        foreach ($pages as $key => $label) {
            $seoData[$key] = SeoSetting::firstOrCreate(
                ['page_key' => $key],
                ['meta_title' => '', 'meta_description' => '']
            );
        }

        return view('admin.seo.index', compact('pages', 'seoData'));
    }

    public function update(Request $request) {
        $request->validate([
            'seo.*.meta_title'       => 'nullable|string|max:60',
            'seo.*.meta_description' => 'nullable|string|max:160',
        ]);

        foreach ($request->seo as $pageKey => $data) {
            SeoSetting::where('page_key', $pageKey)->update([
                'meta_title'       => $data['meta_title'] ?? null,
                'meta_description' => $data['meta_description'] ?? null,
            ]);
        }

        return redirect()->route('admin.seo.index')
                         ->with('success', 'SEO Settings saved! ✅');
    }
}