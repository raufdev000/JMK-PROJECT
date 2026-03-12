<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'slug', 'excerpt', 'content',
        'featured_image', 'gallery_images', 'og_image',
        'meta_title', 'meta_description',
        'tags', 'focus_keyword',
        'status', 'published_at', 'user_id',
    ];

    protected $casts = [
        'published_at'   => 'datetime',
        'gallery_images' => 'array',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}