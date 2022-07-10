<?php

use App\Http\Controllers\Api\Admin\MaduController as AdminMaduController;
use App\Http\Controllers\Api\Admin\MediaController as AdminMediaController;
use App\Http\Controllers\Api\Admin\MudaController as AdminMudaController;
use App\Http\Controllers\Api\Admin\UserController as AdminUserController;
use App\Http\Controllers\Api\Admin\UserRoleController;
use App\Http\Controllers\Api\Admin\UtamaController as AdminUtamaController;
use App\Http\Controllers\Api\AngsuranStatusController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\BusinessAngsuranController;
use App\Http\Controllers\Api\BusinessController;
use App\Http\Controllers\Api\BusinessFormController;
use App\Http\Controllers\Api\BusinessStatusController;
use App\Http\Controllers\Api\CapitalSourceController;
use App\Http\Controllers\Api\DistributionTypeController;
use App\Http\Controllers\Api\EducationController;
use App\Http\Controllers\Api\EmployeeDepartmentController;
use App\Http\Controllers\Api\EstablishmentStatusController;
use App\Http\Controllers\Api\FinanceRecordController;
use App\Http\Controllers\Api\InstallmentTypeController;
use App\Http\Controllers\Api\LocationController;
use App\Http\Controllers\Api\MarketingController;
use App\Http\Controllers\Api\MediaTypeController;
use App\Http\Controllers\Api\MheEventController;
use App\Http\Controllers\Api\MudaCategoryController;
use App\Http\Controllers\Api\MudaTypeController;
use App\Http\Controllers\Api\ProductionProcessController;
use App\Http\Controllers\Api\ReligionController;
use App\Http\Controllers\Api\SectorController;
use App\Http\Controllers\Api\SubSectorController;
use App\Http\Controllers\Api\User\MaduController;
use App\Http\Controllers\Api\User\MediaController;
use App\Http\Controllers\Api\User\MudaController;
use App\Http\Controllers\Api\User\UserController;
use App\Http\Controllers\Api\User\UtamaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [LoginController::class, 'login']);
Route::post('/forgot-password', [LoginController::class, 'forgot_password']);
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/email/verify', [UserController::class, 'resend_email']);
Route::group(['prefix' => 'user', 'middleware' => 'auth:api', 'as' => 'api.user.'], function () {
    Route::post('/update-password', [UserController::class, 'update_password']);
    Route::apiResource('muda', MudaController::class);
    Route::get('/muda/{muda}/download', [MudaController::class, 'download']);
    Route::patch('/muda/{muda}/ttd', [MudaController::class, 'ttd']);
    Route::apiResource('utama', UtamaController::class);
    Route::patch('/utama/{utama}/ttd', [UtamaController::class, 'ttd']);
    Route::get('/utama/{utama}/download', [UtamaController::class, 'download']);
    Route::patch('/utama/{utama}/toko', [UtamaController::class, 'toko']);
    Route::apiResource('madu', MaduController::class);
});
Route::group(['middleware' => ['auth:api', 'admin'], 'prefix' => 'admin', 'as' => 'api.admin.'], function () {
    Route::apiResource('utama', AdminUtamaController::class);
    Route::patch('/utama/{utama}/ttd', [AdminUtamaController::class, 'ttd']);
    Route::get('/utama/{utama}/approve', [AdminUtamaController::class, 'approve']);
    Route::get('/utama/{utama}/reject', [AdminUtamaController::class, 'reject']);
    Route::get('/utama/{utama}/download', [AdminUtamaController::class, 'download']);
    Route::patch('/utama/{utama}/toko', [AdminUtamaController::class, 'toko']);
    Route::apiResource('muda', AdminMudaController::class);
    Route::patch('/muda/{muda}/ttd', [AdminMudaController::class, 'ttd']);
    Route::get('/muda/{muda}/approve', [AdminMudaController::class, 'approve']);
    Route::get('/muda/{muda}/reject', [AdminMudaController::class, 'reject']);
    Route::get('/muda/{muda}/download', [AdminMudaController::class, 'download']);
    Route::apiResource('madu', AdminMaduController::class);
    Route::get('/madu/{madu}/approve', [AdminMaduController::class, 'approve']);
    Route::get('/madu/{madu}/reject', [AdminMaduController::class, 'reject']);
    Route::post('/media', [AdminMediaController::class, 'store']);
    Route::patch('/media/{media}', [AdminMediaController::class, 'update']);
    Route::delete('/media/{media}', [AdminMediaController::class, 'destroy']);
    Route::apiResource('user', AdminUserController::class);
    Route::apiResource('user_role', UserRoleController::class);
});
Route::group(['prefix' => 'location'], function () {
    Route::get('/province', [LocationController::class, 'province']);
    Route::get('/city', [LocationController::class, 'city']);
    Route::get('/district', [LocationController::class, 'district']);
    Route::get('/village', [LocationController::class, 'village']);
});
Route::get('/media', [MediaController::class, 'index']);
Route::get('/media/{media}', [MediaController::class, 'show']);
Route::apiResource('angsuranstatus', AngsuranStatusController::class);
Route::apiResource('business', BusinessController::class);
Route::apiResource('businessangsuran', BusinessAngsuranController::class);
Route::apiResource('businessform', BusinessFormController::class);
Route::apiResource('businessstatus', BusinessStatusController::class);
Route::apiResource('capitalsource', CapitalSourceController::class);
Route::apiResource('distributiontype', DistributionTypeController::class);
Route::apiResource('employeedepartment', EmployeeDepartmentController::class);
Route::apiResource('financerecord', FinanceRecordController::class);
Route::apiResource('installmenttype', InstallmentTypeController::class);
Route::apiResource('marketing', MarketingController::class);
Route::apiResource('mheevent', MheEventController::class);
Route::apiResource('mediatype', MediaTypeController::class);
Route::apiResource('mudacategory', MudaCategoryController::class);
Route::apiResource('mudatype', MudaTypeController::class);
Route::apiResource('productionprocess', ProductionProcessController::class);
Route::apiResource('sector', SectorController::class);
Route::apiResource('subsector', SubSectorController::class);
Route::apiResource('education', EducationController::class);
Route::apiResource('religion', ReligionController::class);
Route::apiResource('establishmentstatus', EstablishmentStatusController::class);

Route::group(['middleware' => 'auth:api', 'as' => 'api.user.'], function () {
    Route::apiResource('user', UserController::class);
    Route::post('/logout', [LoginController::class, 'logout']);
});
