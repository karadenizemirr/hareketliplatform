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
Route::match(['post', 'get'],'/contact', [\App\Http\Controllers\ContactController::class,'add'])->name('contact');
Route::match(['post', 'get'], '/request-education', [\App\Http\Controllers\RequestEducationController::class, 'add'])->name('request-education');
Route::match(['get','post'], '/request-service', [\App\Http\Controllers\ServiceRequestController::class, 'add'])->name('request-service');
// News
Route::match(['get','post'], '/user/add', [\App\Http\Controllers\Admin\UserController::class, 'register'])->name('register');

Route::group(['prefix' => 'news'], function (){
   Route::get('/', [\App\Http\Controllers\NewsController::class,'base'])->name('news');
});
// Admin Pages
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::redirect('/', '/admin/login');
    Route::match(['get','post'],'/login', [\App\Http\Controllers\Admin\UserController::class,'login'])->name("login");

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
        Route::get('/delete/{vid}', [\App\Http\Controllers\Admin\ProductController::class, 'delete'])->name('product-delete');
       });
        Route::group(['prefix' => 'request-education'], function(){
            Route::get('/', [\App\Http\Controllers\RequestEducationController::class, 'adminAll'])->name('request-education-list');
            Route::get('/delete/{vid}', [\App\Http\Controllers\RequestEducationController::class, 'adminDelete'])->name('request-education-delete');

        });
        Route::group(['prefix' => 'request-service'], function(){
            Route::get('/', [\App\Http\Controllers\ServiceRequestController::class, 'adminAll'])->name('request-service-list');
            Route::get('/delete/{vid}', [\App\Http\Controllers\ServiceRequestController::class, 'adminDelete'])->name('request-service-delete');
            Route::get('/detail/{vid}', [\App\Http\Controllers\ServiceRequestController::class, 'adminDetail'])->name('request-service-detail');
            Route::get('/delete/{vid}', [\App\Http\Controllers\ServiceRequestController::class, 'delete'])->name('request-service-delete');
        });
        Route::group(['prefix' => 'contact'], function(){
            Route::get('/', [\App\Http\Controllers\ContactController::class, 'adminAll'])->name('contact-list');
            Route::get('/detail/{vid}', [\App\Http\Controllers\ContactController::class, 'adminDetail'])->name('contact-detail');
            Route::get('/delete/{vid}', [\App\Http\Controllers\ContactController::class, 'adminDelete'])->name('contact-delete');
        });
        Route::group(['prefix' => 'news'], function(){
            Route::get('/', [\App\Http\Controllers\NewsController::class, 'adminAll'])->name('news-list');
            Route::match(['post', 'get'], '/add/{vid?}', [\App\Http\Controllers\NewsController::class, 'addOrUpdate'])->name('news-add-update');
            Route::get('/delete/{$vid}', [\App\Http\Controllers\NewsController::class, 'adminDelete'])->name('news-delete');
        });
        Route::group(['prefix' => 'project'], function(){
            Route::get('/', [\App\Http\Controllers\ProjectController::class, 'getAll'])->name('project-list');
            Route::match(['get', 'post'], "/add",[\App\Http\Controllers\ProjectController::class, 'add'])->name('project-add');
            Route::get('/delete/{vid}', [\App\Http\Controllers\ProjectController::class, 'delete'])->name('project-delete');
        });
        Route::group(['prefix'=> 'slider'], function (){
           Route::get('/', [\App\Http\Controllers\SliderController::class, 'base'])->name('slider-list');
           Route::match(['get','post'],'/add', [\App\Http\Controllers\SliderController::class, 'adminAdd'])->name('slider-add');
           Route::get('/delete{vid}', [\App\Http\Controllers\SliderController::class, 'adminDelete'])->name('slider-delete');
        });

        Route::group(['prefix' => 'single-page'], function (){
           Route::get('/', [\App\Http\Controllers\SinglePageController::class, 'base'])->name('single-page-list');
           Route::match(['get', 'post'], '/add', [\App\Http\Controllers\SinglePageController::class, 'add'])->name('single-page-add');
           Route::get('/delete/{vid}', [\App\Http\Controllers\SinglePageController::class, 'delete'])->name('single-page-delete');
        });
        Route::group(['prefix' => 'me-contact'], function (){
            Route::match(['get', 'post'], '/add/{vid?}', [\App\Http\Controllers\MeContactController::class, 'add'])->name('me-contact-add-update');
            Route::get('/delete/{vid}', [\App\Http\Controllers\SinglePageController::class, 'delete'])->name('single-page-delete');
        });
        Route::match(['get', 'post'], "/add-fault-medicine", [\App\Http\Controllers\FaultMedicineController::class, 'add'])->name('fault-medicine-add');
        Route::get( "/add-fault-medicine/{vid}", [\App\Http\Controllers\FaultMedicineController::class, 'delete'])->name('fault-medicine-delete');
    });

});


