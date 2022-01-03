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
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/toko-mangga', [PageController::class, 'toko_mangga'])->name('toko_mangga');


Route::group(['middleware' => ['user', 'verified'], 'as' => 'user.'], function () {
    Route::get('/change-password', [UserController::class, 'change_password'])->name('change_password');
    Route::post('/update-password', [UserController::class, 'update_password'])->name('update_password');

    Route::get('/create-ajuan', [UserPageController::class, 'create_ajuan'])->name('create_ajuan');
    Route::get('/status-ajuan', [UserPageController::class, 'status_ajuan'])->name('status_ajuan');

    Route::get('/riwayat-angsuran', [UserPageController::class, 'riwayat_angsuran'])->name('riwayat_angsuran');

    Route::get('/belanja', [UserPageController::class, 'belanja'])->name('belanja');
    Route::get('/belanja-list', [UserPageController::class, 'belanja_list'])->name('belanja_list');
    Route::get('/belanja-checkout', [UserPageController::class, 'belanja_checkout'])->name('belanja_checkout');
    Route::get('/belanja-success', [UserPageController::class, 'belanja_success'])->name('belanja_success');

    Route::get('/form/pertanian', [UserPageController::class, 'form_pertanian'])->name('form_pertanian');
    Route::get('/form/perikanan', [UserPageController::class, 'form_perikanan'])->name('form_perikanan');
    Route::get('/form/perkebunan', [UserPageController::class, 'form_perkebunan'])->name('form_perkebunan');
    Route::get('/form/peternakan', [UserPageController::class, 'form_peternakan'])->name('form_peternakan');
    Route::get('/form/perdagangan', [UserPageController::class, 'form_perdagangan'])->name('form_perdagangan');
    Route::get('/form/industri', [UserPageController::class, 'form_industri'])->name('form_industri');
    Route::get('/form/jasa', [UserPageController::class, 'form_jasa'])->name('form_jasa');
});

Route::group(['middleware' => ['user', 'verified']], function () {
    Route::resource('user', UserController::class);
});

Route::get('/eee', function () {
    return view('auth.verify');
});
