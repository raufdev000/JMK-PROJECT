<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AppointmentController;


// Admin controllers - alias ke saath
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\SeoController as AdminSeoController;

Route::get('/', [PageController::class, 'index'])->name('index');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/watches', [PageController::class, 'watches'])->name('Watches');
Route::get('/key', [PageController::class, 'key'])->name('Key');
Route::get('/lock', [PageController::class, 'lock'])->name('Lock');
Route::get('/shoe', [PageController::class, 'shoe'])->name('Shoe');
Route::get('/leather', [PageController::class, 'leather'])->name('leather');
Route::get('/phone', [PageController::class, 'Phone'])->name('Phone');
Route::get('/suitcase', [PageController::class, 'suitcase'])->name('suitcase');
Route::get('/access', [PageController::class, 'access'])->name('Access');
Route::get('/lostcar', [PageController::class, 'lostcar'])->name('lostcar');
Route::get('/losthome', [PageController::class, 'losthome'])->name('losthome');
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');

Route::post('/contact-send', [ContactController::class, 'send'])->name('contact.send');
Route::post('/appointment-send', [AppointmentController::class, 'send'])->name('appointment.send');
Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Public routes (purane wale same rahenge)
Route::get('/', [PageController::class, 'index'])->name('index');
// Admin routes - alias use karo
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    
    // Dashboard
    Route::get('/dashboard', function() {
        return view('admin.dashboard', [
            'totalPages'     => \App\Models\Page::count(),
            'publishedPosts' => \App\Models\Post::where('status','published')->count(),
            'draftPosts'     => \App\Models\Post::where('status','draft')->count(),
        ]);
    })->name('dashboard');

    Route::resource('pages', AdminPageController::class);
    Route::resource('posts', AdminPostController::class);
    Route::get('/seo', [AdminSeoController::class, 'index'])->name('seo.index');
    Route::post('/seo', [AdminSeoController::class, 'update'])->name('seo.update');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy.policy');