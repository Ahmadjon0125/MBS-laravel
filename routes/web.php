<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceInController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'home']);

Route::get('/about', [AboutController::class, 'about'])->name('about.page');
Route::get('/service', [ServiceController::class, 'service'])->name('service.page');
Route::get('/product', [ProductController::class, 'product'])->name('product.page');
Route::get('/portfolio', [PortfolioController::class, 'portfolio'])->name('portfolio.page');
Route::get('/news', [NewsController::class, 'news'])->name('news.page');
Route::get('/contact', [ContactController::class,'contact'])->name('contact.page');
Route::get('/service/{slug}', [ServiceInController::class, 'serviceIn'])->name('serviceIn.page');
