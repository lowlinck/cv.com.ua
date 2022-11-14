<?php

    use Illuminate\Support\Facades\Route;


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
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', IndexController::class)->name('main.index');
        Route::post('/', StoreController::class)->name('main.store');

    });
    Route::group(['namespace' => 'Blog','prefix'=>'blog'], function () {
        Route::get('/', IndexController::class)->name('blog.index');
        Route::get('/{artical}', ShowController::class)->name('blog.show');

    });

Auth::routes();

