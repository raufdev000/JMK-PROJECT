<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SeoSetting;

class PageController extends Controller
{
    // Home Page
    public function index()
    {
        $seo = SeoSetting::where('page_key', 'home')->first();
        return view('index', [
            'seo_title'       => $seo?->meta_title,
            'seo_description' => $seo?->meta_description,
        ]);
    }

    // Contact Page
    public function contact()
    {
        $seo = SeoSetting::where('page_key', 'contact')->first();
        return view('contact', [
            'seo_title'       => $seo?->meta_title,
            'seo_description' => $seo?->meta_description,
        ]);
    }

    // Services Page
    public function services()
    {
        $seo = SeoSetting::where('page_key', 'services')->first();
        return view('Services', [
            'seo_title'       => $seo?->meta_title,
            'seo_description' => $seo?->meta_description,
        ]);
    }

    // About Page
    public function about()
    {
        $seo = SeoSetting::where('page_key', 'about')->first();
        return view('about', [
            'seo_title'       => $seo?->meta_title,
            'seo_description' => $seo?->meta_description,
        ]);
    }

    public function Key()
    {
        $seo = SeoSetting::where('page_key', 'key-repairing')->first();
        return view('Keyrepairing', [
            'seo_title'       => $seo?->meta_title,
            'seo_description' => $seo?->meta_description,
        ]);
    }

    public function lock()
    {
        $seo = SeoSetting::where('page_key', 'lock')->first();
        return view('Lock', [
            'seo_title'       => $seo?->meta_title,
            'seo_description' => $seo?->meta_description,
        ]);
    }

    public function Shoe()
    {
        $seo = SeoSetting::where('page_key', 'shoe')->first();
        return view('Shoe', [
            'seo_title'       => $seo?->meta_title,
            'seo_description' => $seo?->meta_description,
        ]);
    }

    public function watches()
    {
        $seo = SeoSetting::where('page_key', 'watches')->first();
        return view('Watches', [
            'seo_title'       => $seo?->meta_title,
            'seo_description' => $seo?->meta_description,
        ]);
    }

    public function phone()
    {
        $seo = SeoSetting::where('page_key', 'phone')->first();
        return view('Phone', [
            'seo_title'       => $seo?->meta_title,
            'seo_description' => $seo?->meta_description,
        ]);
    }

    public function leather()
    {
        $seo = SeoSetting::where('page_key', 'leather')->first();
        return view('Leather', [
            'seo_title'       => $seo?->meta_title,
            'seo_description' => $seo?->meta_description,
        ]);
    }

    public function suitcase()
    {
        $seo = SeoSetting::where('page_key', 'suitcase')->first();
        return view('suitcaserepairing', [
            'seo_title'       => $seo?->meta_title,
            'seo_description' => $seo?->meta_description,
        ]);
    }

    public function access()
    {
        $seo = SeoSetting::where('page_key', 'access-card')->first();
        return view('accesscard', [
            'seo_title'       => $seo?->meta_title,
            'seo_description' => $seo?->meta_description,
        ]);
    }

    public function lostcar()
    {
        $seo = SeoSetting::where('page_key', 'lost-car-keys')->first();
        return view('carkeys', [
            'seo_title'       => $seo?->meta_title,
            'seo_description' => $seo?->meta_description,
        ]);
    }

    public function losthome()
    {
        $seo = SeoSetting::where('page_key', 'lost-home-keys')->first();
        return view('homekeys', [
            'seo_title'       => $seo?->meta_title,
            'seo_description' => $seo?->meta_description,
        ]);
    }

    public function privacy()
    {
        $seo = SeoSetting::where('page_key', 'privacy-policy')->first();
        return view('privacy', [
            'seo_title'       => $seo?->meta_title,
            'seo_description' => $seo?->meta_description,
        ]);
    }
}