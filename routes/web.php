<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebsiteController::class, 'page'])->defaults('page', 'home')->name('home');
foreach (['about' => 'about', 'programs' => 'programs', 'where-we-work' => 'community', 'journal' => 'journal', 'get-involved' => 'involvement', 'contact' => 'contact', 'privacy' => 'privacy'] as $path => $page) {
    Route::get('/'.$path, [WebsiteController::class, 'page'])->defaults('page', $page)->name($page);
}
Route::get('/programs/{slug}', [WebsiteController::class, 'program'])->name('program');
Route::get('/journal/{slug}', [WebsiteController::class, 'article'])->name('article');
Route::post('/contact', [WebsiteController::class, 'inquire'])->middleware('throttle:5,1')->name('inquire');
Route::get('/sitemap.xml', [WebsiteController::class, 'sitemap'])->name('sitemap');

Route::get('/robots.txt', fn () => response("User-agent: *\nAllow: /\nSitemap: ".route('sitemap')."\n", 200, ['Content-Type' => 'text/plain']));
