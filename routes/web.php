<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\User\PageController as UserPageController;
use App\Http\Controllers\UserController;
use App\Mail\TemplateMail;
use Illuminate\Support\Facades\Auth;
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

Auth::routes(['verify' => true]);

Route::get('/template', function () {
    return new TemplateMail();
});

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/info', [PageController::class, 'info'])->name('info');
Route::get('/prosedur', [PageController::class, 'prosedur'])->name('prosedur');
Route::get('/media', [PageController::class, 'media'])->name('media');
Route::get('/toko-mangga', [PageController::class, 'toko_mangga'])->name('toko_mangga');


Route::group(['middleware' => ['user'], 'as' => 'user.'], function () {
    Route::get('/change-password', [UserController::class, 'change_password'])->name('change_password');
    Route::post('/update-password', [UserController::class, 'update_password'])->name('update_password');

    Route::get('/create-ajuan', [UserPageController::class, 'create_ajuan'])->name('create_ajuan');
    Route::get('/status-ajuan', [UserPageController::class, 'status_ajuan'])->name('status_ajuan');

    Route::get('/riwayat-angsuran', [UserPageController::class, 'riwayat_angsuran'])->name('riwayat_angsuran');

    Route::get('/belanja', [UserPageController::class, 'belanja'])->name('belanja');
    Route::get('/belanja-list', [UserPageController::class, 'belanja_list'])->name('belanja_list');
    Route::get('/belanja-checkout', [UserPageController::class, 'belanja_checkout'])->name('belanja_checkout');
    Route::get('/belanja-success', [UserPageController::class, 'belanja_success'])->name('belanja_success');
});

Route::group(['middleware' => ['user']], function () {
    Route::resource('user', UserController::class);
});
