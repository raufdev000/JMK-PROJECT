<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'heading',
        'content',
        // Images
        'featured_image',
        'banner_image',
        'icon_image',
        'og_image',
        'gallery_images',
        // SEO
        'meta_title',
        'meta_description',
        'canonical_url',
        'og_title',
        'og_description',
        'robots',
        'is_active',
    ];

    protected $casts = [
        'is_active'      => 'boolean',
        'gallery_images' => 'array',
    ];
}