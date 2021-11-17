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

Route::get('/user/change-password', [UserController::class, 'change_password'])->name('user.change_password');
Route::post('/user/update-password', [UserController::class, 'update_password'])->name('user.update_password');

Route::get('/user/create-ajuan', [UserPageController::class, 'create_ajuan'])->name('user.create_ajuan');
Route::get('/user/status-ajuan', [UserPageController::class, 'status_ajuan'])->name('user.status_ajuan');

Route::get('/user/riwayat-angsuran', [UserPageController::class, 'riwayat_angsuran'])->name('user.riwayat_angsuran');

Route::get('/user/belanja', [UserPageController::class, 'belanja'])->name('user.belanja');
Route::get('/user/belanja-list', [UserPageController::class, 'belanja_list'])->name('user.belanja_list');
Route::get('/user/belanja-checkout', [UserPageController::class, 'belanja_checkout'])->name('user.belanja_checkout');
Route::get('/user/belanja-success', [UserPageController::class, 'belanja_success'])->name('user.belanja_success');

Route::resource('user', UserController::class);
