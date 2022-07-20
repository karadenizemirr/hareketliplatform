<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
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

// Home Pages
Route::get('/', [HomeController::class, 'base']) -> name('anasayfa');
Route::get('/category/{slug}', [CategoryController::class, 'base'])->name('category');
Route::get('/contact', [\App\Http\Controllers\ContactController::class,'base'])->name('contact');
Route::match(['post', 'get'], '/request-education', [\App\Http\Controllers\RequestEducationController::class, 'add'])->name('request-education');
// Mail Test
Route::get('/test/mail', function (){
    $person = ['test name'];
    return new \App\Mail\EducationRequestMail($person);
});

// Admin Pages
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::redirect('/', '/admin/login');
    Route::match(['get','post'],'/login', [\App\Http\Controllers\Admin\UserController::class,'login'])->name("login");
    Route::match(['get','post'], '/user/add', [\App\Http\Controllers\Admin\UserController::class, 'register'])->name('register');

    Route::group(['middleware' => 'super_admin'], function (){
       Route::get('/home', [\App\Http\Controllers\Admin\HomeController::class, 'base']) -> name('home');
       Route::group(['prefix' => 'category'], function (){
           Route::get( '/', [\App\Http\Controllers\Admin\CategoryController::class, 'base'])->name('category-list');
           Route::match(['post', 'get'],'/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('category-add');
           Route::get('/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'delete'])->name('category-delete');
       });

       Route::group(['prefix' => 'product'], function(){
        Route::get('/', [\App\Http\Controllers\Admin\ProductController::class, 'base'])->name('product-list');
        Route::match(['get','post'], '/add/{vid?}', [\App\Http\Controllers\Admin\ProductController::class, 'add'])->name('product-add-update');

       });
   });

});


