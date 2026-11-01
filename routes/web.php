<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CaseStudyController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Shankar Detective Agency Web Routes
|--------------------------------------------------------------------------
*/

// Core Institutional Pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::redirect('/about', '/about-us', 301);
Route::get('/why-choose-us', [PageController::class, 'whyChooseUs'])->name('why-choose-us');
Route::get('/how-we-work', [PageController::class, 'howWeWork'])->name('how-we-work');
Route::get('/contact-us', [PageController::class, 'contact'])->name('contact');
Route::redirect('/contact', '/contact-us', 301);
Route::get('/book-free-consultation', [PageController::class, 'consultation'])->name('consultation');
Route::redirect('/consultation', '/book-free-consultation', 301);
Route::get('/frequently-asked-questions', [PageController::class, 'faq'])->name('faq');
Route::redirect('/faq', '/frequently-asked-questions', 301);
Route::get('/client-testimonials', [PageController::class, 'testimonials'])->name('testimonials');
Route::redirect('/testimonials', '/client-testimonials', 301);
Route::redirect('/our-investigation-team', '/about-us', 301);
Route::redirect('/team', '/about-us', 301);
Route::get('/careers', [PageController::class, 'careers'])->name('careers');

// Legal & Utility Pages
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-and-conditions', [PageController::class, 'termsAndConditions'])->name('terms-and-conditions');
Route::get('/disclaimer-legal-compliance', [PageController::class, 'disclaimerCompliance'])->name('disclaimer-compliance');
Route::redirect('/disclaimer-compliance', '/disclaimer-legal-compliance', 301);
Route::get('/sitemap', [PageController::class, 'htmlSitemap'])->name('html-sitemap');
Route::redirect('/html-sitemap', '/sitemap', 301);

// 24 Dedicated Service Pages
Route::prefix('services')->group(function () {
    Route::get('/', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/{slug}', [ServiceController::class, 'show'])->name('services.show');
});

// 8 City Geo-Targeted Location Pages
Route::get('/detective-agency-in-{city}', [CityController::class, 'show'])->name('cities.show');
Route::redirect('/pune', '/detective-agency-in-pune', 301);
Route::redirect('/mumbai', '/detective-agency-in-mumbai', 301);
Route::redirect('/indore', '/detective-agency-in-indore', 301);
Route::redirect('/ahmedabad', '/detective-agency-in-ahmedabad', 301);
Route::redirect('/bangalore', '/detective-agency-in-bengaluru', 301);
Route::redirect('/bengaluru', '/detective-agency-in-bengaluru', 301);

// Case Studies
Route::prefix('case-studies')->group(function () {
    Route::get('/', [CaseStudyController::class, 'index'])->name('case-studies.index');
    Route::get('/{slug}', [CaseStudyController::class, 'show'])->name('case-studies.show');
});

// Blog System
Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/category/{slug}', [BlogController::class, 'category'])->name('blog.category');
    Route::get('/tag/{slug}', [BlogController::class, 'tag'])->name('blog.tag');
    Route::get('/{slug}', [BlogController::class, 'show'])->name('blog.show');
});

// Lead Capture with Honeypot & Throttle
Route::post('/inquire', [LeadController::class, 'store'])
    ->middleware('throttle:10,1')
    ->name('leads.store');

// Technical SEO: Dynamic Sitemap & Robots.txt
Route::get('/sitemap.xml', [SitemapController::class, 'sitemap'])->name('sitemap.xml');
Route::get('/robots.txt', [SitemapController::class, 'robots'])->name('robots.txt');
