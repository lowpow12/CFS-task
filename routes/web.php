<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('home');
})->name('home');

Route::prefix('feedbacks')
    ->name('feedbacks.')
    ->controller(FeedbackController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('create/{status?}', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/submitting', 'wait')->name('wait');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::put('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'delete')->name('delete');
        Route::delete('{id}/delete', 'destroy')->name('destroy');
        Route::get('upload', 'upload')->name('upload');
        Route::get('upload/process', 'proses_upload')->name('proses_upload'); 
    });

    Route::name('auth.')
    ->controller(AuthController::class)
    ->group(function () {
        Route::get('signup', 'signupForm')->name('signupForm');
        Route::post('signup', 'signup')->name('signup');
        Route::get('login', 'loginForm')->name('loginForm');
        Route::post('login', 'login')->name('login');
        Route::post('logout', 'logout')->name('logout');
    });

    