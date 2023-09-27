<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\ContactController;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return redirect()->route('admin.login');
    });
    Route::get('/login', [LoginController::class, 'index'])->name('admin.login');
    Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
    Route::get('/logout', [LoginController::class, 'logout']);

    // Route::match(['admin/dashboard'], '/', function () {
    //        return 'Hello World';
    //    });
    // DASHBOARD

    // Route::get('/', function () {
    //     return view('welcome');
    // })->name('adminDashboard');
});

// Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
// Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
// Route::post('/loginn', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');


// });

Auth::routes();

Route::controller(BlogController::class)->group(function () {
    Route::get('/bloglist', 'list')->name('blog.list');
    Route::get('/blogadd', 'add')->name('blog.add');
    Route::get('/blogedit', 'edit')->name('blog.edit');
    Route::get('/blogview', 'view')->name('blog.view');
    Route::get('/blogdelete', 'delete')->name('blog.delete');
    Route::get('/blogtrashed', 'trashed')->name('blog.trashed');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('/contactlist', 'list')->name('contact.list');
    Route::get('/contactadd', 'add')->name('contact.add');
    Route::get('/contactedit', 'edit')->name('contact.edit');
    Route::get('/contactview', 'view')->name('contact.view');
    Route::get('/contactupdate', 'update')->name('contact.update');
    Route::get('/contactview', 'view')->name('contact.view');
    Route::get('/contactdelete', 'delete')->name('contact.delete');
    Route::get('/contacttrashed', 'trashed')->name('contact.trashed');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/userlist', 'list')->name('user.list');
    Route::get('/useradd', 'add')->name('user.add');
    Route::post('/userstore', 'store')->name('user.store');
    Route::get('/useredit/{id}', 'edit')->name('user.edit');
    Route::get('/userview', 'view')->name('user.view');
    Route::get('/userupdate', 'update')->name('user.update');
    Route::get('/userview', 'view')->name('user.view');
    Route::get('/userdelete', 'delete')->name('user.delete');
    Route::get('/usertrashed', 'trashed')->name('user.trashed');
});

// Route::get('users', [UserController::class, 'index'])->name('users.index');