<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            if (!Schema::hasColumn('pages', 'heading'))
                $table->string('heading')->nullable()->after('slug');

            if (!Schema::hasColumn('pages', 'featured_image'))
                $table->string('featured_image')->nullable()->after('content');

            if (!Schema::hasColumn('pages', 'banner_image'))
                $table->string('banner_image')->nullable()->after('featured_image');

            if (!Schema::hasColumn('pages', 'icon_image'))
                $table->string('icon_image')->nullable()->after('banner_image');

            if (!Schema::hasColumn('pages', 'gallery_images'))
                $table->json('gallery_images')->nullable()->after('icon_image');

            if (!Schema::hasColumn('pages', 'canonical_url'))
                $table->string('canonical_url')->nullable()->after('meta_description');

            if (!Schema::hasColumn('pages', 'og_title'))
                $table->string('og_title')->nullable()->after('canonical_url');

            if (!Schema::hasColumn('pages', 'og_description'))
                $table->text('og_description')->nullable()->after('og_title');

            if (!Schema::hasColumn('pages', 'og_image'))
                $table->string('og_image')->nullable()->after('og_description');

            if (!Schema::hasColumn('pages', 'robots'))
                $table->string('robots')->nullable()->default('index, follow')->after('og_image');
        });
    }

    public function down()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn([
                'heading', 'featured_image', 'banner_image', 'icon_image',
                'gallery_images', 'canonical_url', 'og_title', 'og_description',
                'og_image', 'robots'
            ]);
        });
    }
};