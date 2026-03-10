<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'slug', 'excerpt', 'content', 'featured_image',
        'meta_title', 'meta_description', 'status', 'published_at', 'user_id'
    ];

    protected $casts = ['published_at' => 'datetime'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}