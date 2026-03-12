<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::table('posts', function (Blueprint $table) {
            $table->json('gallery_images')->nullable()->after('featured_image');
            $table->string('og_image')->nullable()->after('gallery_images');
            $table->string('tags')->nullable()->after('og_image');
            $table->string('focus_keyword')->nullable()->after('tags');
        });
    }
    public function down() {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn(['gallery_images', 'og_image', 'tags', 'focus_keyword']);
        });
    }
};