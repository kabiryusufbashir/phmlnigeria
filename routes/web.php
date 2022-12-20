<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('front');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/board', [HomeController::class, 'board'])->name('board');
Route::get('/management', [HomeController::class, 'management'])->name('management');
Route::get('/departments', [HomeController::class, 'departments'])->name('departments');
Route::get('/awards', [HomeController::class, 'awards'])->name('awards');
Route::get('/mds', [HomeController::class, 'mds'])->name('mds');
Route::get('/whyphml', [HomeController::class, 'whyphml'])->name('whyphml');
Route::get('/our-offerings', [HomeController::class, 'ourofferings'])->name('ourofferings');
Route::get('/faqs', [HomeController::class, 'faqs'])->name('faqs');
Route::get('/enlightment', [HomeController::class, 'enlightment'])->name('enlightment');
