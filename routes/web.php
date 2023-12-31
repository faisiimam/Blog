<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/bloglist', [BlogController::class, 'list'])->name('blog.list');

Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/singlepost', 'singlepage')->name('singlepost');
    Route::get('/contact-us', 'contact')->name('contact.us');
    Route::get('/blog/{id?}', 'singleblog')->name('single.blog');
});

