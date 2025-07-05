<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\IndexController;


// Route::middleware('web')->group(function () {});

Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/audios', 'audios')->name('audios');
    Route::get('/events', 'events')->name('events');
    Route::get('/book-stand', 'bookStand')->name('book_stand');
    Route::get('/gallery', 'gallery')->name('gallery');
    Route::get('/clients', 'clients')->name('clients');
    Route::get('/subscribe', 'subscribe')->name('subscribe');
    Route::get('/visitor', 'visitor')->name('visitor');
    Route::get('/investor', 'investor')->name('investor');
    Route::get('/discover', 'discover')->name('discover');
    Route::get('/news', 'news')->name('news');
    Route::get('/about', 'about')->name('about');
    Route::get('/faq', 'faq')->name('faq');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact/send', 'contactSend')->name('contact.send');
    Route::get('/careers', 'careersCreate')->name('staff_application');
    Route::post('/careers', 'careersStore')->name('staff.store');
});

Route::controller(FilesController::class)->group(function () {
    // Route::get('/ImageFiles/{title}/{type}', 'imageFiles')->name('ImageFiles');
    Route::get('/VideoFiles/{title}', 'videoFiles')->name('VideoFiles');
    Route::get('/sitemap', 'sitemap')->name('sitemap');
    Route::get('/sitemap.xml', 'sitemap')->name('sitemap.xml');
    Route::get('/create-sitemap','createSiteMap');
    Route::get('/robots.txt', 'robotstxt')->name('robots.txt');
    Route::get('/robots', 'robotstxt')->name('robots');
});


Route::get('lang/{lang}', function($lang) {
    if (in_array($lang, ['ar', 'en'])) {
        session(['locale' => $lang]);
        app()->setLocale($lang);
    }
    return back();
})->name('lang.switch');



use App\Livewire\ParticipationStepperForm;
use App\Livewire\InvestorStepperForm;

Route::get('/participation-form', ParticipationStepperForm::class);
Route::get('/investor-form', InvestorStepperForm::class);
