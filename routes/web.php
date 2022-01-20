<?php

use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\MudaController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\User\PageController as UserPageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UtamaController;
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

Route::get('/proposal', function(){
    return view('proposal');
});
Route::get('/proposal/download', [PageController::class, 'checkPDF']);

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/mangga-muda/register', [PageController::class, 'mangga_muda_register'])->name('mangga_muda.register');
Route::get('/mangga-muda/login', [PageController::class, 'mangga_muda_login'])->name('mangga_muda.login');
Route::get('/mangga-muda/home', [PageController::class, 'mangga_muda_home'])->name('mangga_muda.home');
Route::get('/info', [PageController::class, 'info'])->name('info');
Route::get('/prosedur', [PageController::class, 'prosedur'])->name('prosedur');
Route::get('/media', [PageController::class, 'media'])->name('media');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/toko-mangga', [PageController::class, 'toko_mangga'])->name('toko_mangga');
Route::group(['as' => 'profil.'], function () {
    Route::get('/tentang', [PageController::class, 'tentang'])->name('tentang');
    Route::get('/mangga', [PageController::class, 'mangga'])->name('mangga');
    Route::get('/mangga-makmur', [PageController::class, 'mangga_makmur'])->name('mangga_makmur');
    Route::get('/mangga-gadung', [PageController::class, 'mangga_gadung'])->name('mangga_gadung');
    Route::get('/mangga-golek', [PageController::class, 'mangga_golek'])->name('mangga_golek');
    Route::get('/mangga-muda', [PageController::class, 'mangga_muda'])->name('mangga_muda');
    Route::get('/mangga-madu', [PageController::class, 'mangga_madu'])->name('mangga_madu');
    Route::get('/landasan', [PageController::class, 'landasan'])->name('landasan');
    Route::get('/sebaran', [PageController::class, 'sebaran'])->name('sebaran');
    Route::get('/alur', [PageController::class, 'alur'])->name('alur');
});


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

    Route::get('/form/mangga', [UserPageController::class, 'form_mangga'])->name('form_mangga');
    Route::post('/form/mangga/refresh-kelompok', [UserPageController::class, 'refresh_kelompok'])->name('form_mangga.refreshkelompok');
    Route::get('/form/mangga_muda', [UserPageController::class, 'form_mangga_muda'])->name('form_mangga_muda');
    Route::resource('muda', MudaController::class);
    Route::get('/muda/{muda}/preview', [MudaController::class, 'preview'])->name('muda.preview');
    Route::get('/muda/{muda}/download', [MudaController::class, 'download'])->name('muda.download');
    Route::resource('utama', UtamaController::class);
    Route::patch('/utama/{utama}/ttd', [UtamaController::class, 'ttd'])->name('utama.ttd');
    Route::get('/utama/{utama}/preview', [UtamaController::class, 'preview'])->name('utama.preview');
    Route::get('/utama/{utama}/download', [UtamaController::class, 'download'])->name('utama.download');
});

Route::group(['middleware' => ['user']], function () {
    Route::resource('user', UserController::class);
});

Route::group(['middleware' => ['admin'], 'as' => 'admin.'], function () {
    Route::get('/dashboard', [AdminPageController::class, 'dashboard'])->name('dashboard');
    Route::get('/program', [AdminPageController::class, 'program'])->name('program');
    Route::get('/program/mangga_muda', [AdminPageController::class, 'mangga_muda'])->name('program.mangga_muda');
});

Route::get('/eee', function () {
    return view('auth.verify');
});
