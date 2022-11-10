<?php

    use App\Http\Controllers\LanguageController;
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
    Route::get('/',\App\Http\Controllers\Main\IndexController::class)->name('main.index');
   // Route::get('/langchange', [LanguageController::class, 'langChange'])->name('lang.change');

Auth::routes();

