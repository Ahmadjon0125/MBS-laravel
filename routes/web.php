<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsInController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PortfolioInController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductInController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceInController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

// Tilni almashtirish
Route::get('/set-lang/{lang}', function ($lang) {
    session(['locale' => $lang]);
    App::setLocale($lang);
    return back();
})->name('set.lang');


// Sahifalar
Route::get('/', [IndexController::class, 'home'])->name('home.page');

Route::get('/about', [AboutController::class, 'about'])->name('about.page');
Route::get('/service', [ServiceController::class, 'service'])->name('service.page');
Route::get('/product', [ProductController::class, 'product'])->name('product.page');
Route::get('/portfolio', [PortfolioController::class, 'portfolio'])->name('portfolio.page');
Route::get('/news', [NewsController::class, 'news'])->name('news.page');
Route::get('/contact', [ContactController::class,'contact'])->name('contact.page');
Route::get('/service/{slug}', [ServiceInController::class, 'serviceIn'])->name('serviceIn.page');
Route::get('/productIn/{slug}', [ProductInController::class, 'productIn'])->name('productIn.page');
Route::get('/portfolioIn/{slug}', [PortfolioInController::class, 'portfolioIn'])->name('portfolioIn.page');
Route::get('/newsIn/{slug}', [NewsInController::class, 'newsIn'])->name('newsIn.page');
Route::post('/form', [FormController::class, 'store'])->name('form.page');

