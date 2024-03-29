<?php

use App\Http\Controllers\Admin\AngsuranFeeController as AdminAngsuranFeeController;
use App\Http\Controllers\Admin\BusinessAngsuranController as AdminBusinessAngsuranController;
use App\Http\Controllers\Admin\BusinessController;
use App\Http\Controllers\admin\MaduController as AdminMaduController;
use App\Http\Controllers\Admin\MediaController as AdminMediaController;
use App\Http\Controllers\Admin\MheEventController as AdminMheEventController;
use App\Http\Controllers\Admin\MheTransactionController as AdminMheTransactionController;
use App\Http\Controllers\Admin\MudaController as AdminMudaController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\PeopleController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\UtamaController as AdminUtamaController;
use App\Http\Controllers\Admin\UtamaEvaluationController;
use App\Http\Controllers\AngsuranFeeController;
use App\Http\Controllers\BusinessAngsuranController;
use App\Http\Controllers\MaduController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\MheEventController;
use App\Http\Controllers\MheTransactionController;
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

Route::get('/proposal', function () {
    return view('proposal');
});
Route::get('/proposal/download', [PageController::class, 'checkPDF']);

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/mhe', [PageController::class, 'mhe_home'])->name('mhe.home');
Route::get('/mhe-register', [PageController::class, 'mhe_register'])->name('mhe.register');
Route::get('/mhe-success', [PageController::class, 'mhe_success'])->name('mhe.success');
Route::resource('mhe_transaction', MheTransactionController::class);
Route::resource('angsuran_fee', AngsuranFeeController::class);
// Route::resource('mhe_event', MheEventController::class);
Route::get('/mangga-muda/register', [PageController::class, 'mangga_muda_register'])->name('mangga_muda.register');
Route::get('/mangga-muda/login', [PageController::class, 'mangga_muda_login'])->name('mangga_muda.login');
Route::get('/mangga-madu/register', [PageController::class, 'mangga_madu_register'])->name('mangga_madu.register');
Route::get('/mangga-madu/login', [PageController::class, 'mangga_madu_login'])->name('mangga_madu.login');
Route::get('/mangga-muda/home', [PageController::class, 'mangga_muda_home'])->name('mangga_muda.home');
Route::get('/info', [PageController::class, 'info'])->name('info');
Route::get('/prosedur', [PageController::class, 'prosedur'])->name('prosedur');
Route::get('/media', [MediaController::class, 'index'])->name('media.index');
Route::get('/media/{media}', [MediaController::class, 'show'])->name('media.show');
Route::post('media/fetch_data', [MediaController::class, 'fetch_data'])->name('media.fetchdata');
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

    Route::get('/form/mangga', [UserPageController::class, 'form_mangga'])->name('form_mangga');
    Route::post('/form/mangga/refresh-kelompok', [UserPageController::class, 'refresh_kelompok'])->name('form_mangga.refreshkelompok');
    Route::get('/form/mangga_muda', [UserPageController::class, 'form_mangga_muda'])->name('form_mangga_muda');
    Route::resource('muda', MudaController::class);
    Route::patch('/muda/{muda}/ttd', [MudaController::class, 'ttd'])->name('muda.ttd');
    Route::get('/muda/{muda}/preview', [MudaController::class, 'preview'])->name('muda.preview');
    Route::get('/muda/{muda}/download', [MudaController::class, 'download'])->name('muda.download');
    Route::resource('utama', UtamaController::class);
    Route::patch('/utama/{utama}/toko', [UtamaController::class, 'toko'])->name('utama.toko');
    Route::patch('/utama/{utama}/ttd', [UtamaController::class, 'ttd'])->name('utama.ttd');
    Route::get('/utama/{utama}/preview', [UtamaController::class, 'preview'])->name('utama.preview');
    Route::get('/utama/{utama}/download', [UtamaController::class, 'download'])->name('utama.download');
    Route::get('/utama/{utama}/angsuran', [UtamaController::class, 'angsuran'])->name('utama.angsuran');
    Route::resource('madu', MaduController::class);

    Route::resource('angsuran', BusinessAngsuranController::class);
});

Route::group(['middleware' => ['user', 'verified']], function () {
    Route::resource('user', UserController::class);
});

Route::group(['middleware' => ['admin'], 'as' => 'admin.', 'prefix' => 'admin'], function () {
    Route::get('/dashboard', [AdminPageController::class, 'dashboard'])->name('dashboard');
    Route::get('/program', [AdminPageController::class, 'program'])->name('program');
    Route::get('/program/{map}', [AdminPageController::class, 'program_map'])->name('program.map');
    Route::get('/program/utama/{business}', [AdminPageController::class, 'mangga_utama'])->name('program.utama');
    Route::resource('utama', AdminUtamaController::class);
    Route::patch('/utama/{utama}/ttd', [AdminUtamaController::class, 'ttd'])->name('utama.ttd');
    Route::get('/utama/{utama}/approvesurveyor', [AdminUtamaController::class, 'approve_surveyor'])->name('utama.approve_surveyor');
    Route::get('/utama/{utama}/approvepimpinan', [AdminUtamaController::class, 'approve_pimpinan'])->name('utama.approve_pimpinan');
    Route::get('/utama/{utama}/reject', [AdminUtamaController::class, 'reject'])->name('utama.reject');
    Route::get('/utama/{utama}/download', [AdminUtamaController::class, 'download'])->name('utama.download');
    Route::get('/utama/{utama}/preview', [AdminUtamaController::class, 'preview'])->name('utama.preview');
    Route::post('/utama/refresh-kelompok', [AdminUtamaController::class, 'refresh_kelompok'])->name('utama.refreshkelompok');
    Route::patch('/utama/{utama}/toko', [AdminUtamaController::class, 'toko'])->name('utama.toko');

    Route::get('/program/muda/{business}', [AdminPageController::class, 'mangga_muda'])->name('program.muda');
    Route::resource('muda', AdminMudaController::class);
    Route::patch('/muda/{muda}/ttd', [AdminMudaController::class, 'ttd'])->name('muda.ttd');
    Route::get('/muda/{muda}/approvesurveyor', [AdminMudaController::class, 'approve_surveyor'])->name('muda.approve_surveyor');
    Route::get('/muda/{muda}/approvepimpinan', [AdminMudaController::class, 'approve_pimpinan'])->name('muda.approve_pimpinan');
    Route::get('/muda/{muda}/reject', [AdminMudaController::class, 'reject'])->name('muda.reject');
    Route::get('/muda/{muda}/download', [AdminMudaController::class, 'download'])->name('muda.download');
    Route::get('/muda/{muda}/preview', [AdminMudaController::class, 'preview'])->name('muda.preview');

    Route::resource('madu', AdminMaduController::class);
    Route::get('/madu/{madu}/approvesurveyor', [AdminMaduController::class, 'approve_surveyor'])->name('madu.approve_surveyor');
    Route::get('/madu/{madu}/reject', [AdminMaduController::class, 'reject'])->name('madu.reject');

    Route::get('/media', [AdminMediaController::class, 'index'])->name('media.index');
    Route::get('/media/create', [AdminMediaController::class, 'create'])->name('media.create');
    Route::post('/media/store', [AdminMediaController::class, 'store'])->name('media.store');
    Route::get('/media/{media}/edit', [AdminMediaController::class, 'edit'])->name('media.edit');
    Route::put('/media/{media}/update', [AdminMediaController::class, 'update'])->name('media.update');
    Route::delete('/media/{media}/delete', [AdminMediaController::class, 'destroy'])->name('media.destroy');
    Route::post('media/uploadphotocontent', [AdminMediaController::class, 'upload_photo_content'])->name('media.uploadphotocontent');

    Route::get('/people/one', [PeopleController::class, 'one'])->name('people.one');
    Route::get('/people/two', [PeopleController::class, 'two'])->name('people.two');
    Route::resource('people', PeopleController::class);

    Route::post('/evaluation/check', [UtamaEvaluationController::class, 'check'])->name('evaluation.check');
    Route::resource('evaluation', UtamaEvaluationController::class);

    Route::resource('business', BusinessController::class);

    Route::resource('user', AdminUserController::class);

    Route::get('/angsuran/{business_angsuran}/approve', [AdminBusinessAngsuranController::class, 'approve'])->name('angsuran.approve');
    Route::get('/angsuran/{business_angsuran}/reject', [AdminBusinessAngsuranController::class, 'reject'])->name('angsuran.reject');

    Route::resource('mhe_event', AdminMheEventController::class);
    Route::resource('mhe_transaction', AdminMheTransactionController::class);

    Route::resource('angsuran_fee', AdminAngsuranFeeController::class);
});

Route::get('/eee', function () {
    return view('auth.verify');
});
