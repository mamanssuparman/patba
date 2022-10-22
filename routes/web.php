<?php

use UniSharp\LaravelFilemanager\Lfm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DataJs;
use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\Admin\MataPelajaranController;
use App\Http\Controllers\Admin\KelasController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SoalController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/login', function () {
    return view('pages.login', [
        'title'         => 'PATBA - Login'
    ]);
});

Route::post('/admin/login-cek', [AuthAdminController::class, 'cek'])->name('auth-admin');

Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('pages.admin.dashboard.index', [
            'title'             => 'PATBA | Dashboaord',
            'mainbreadcrumb'    => 'Dashboard',
            'breadcrumb1'       => 'Dashboard',
            'breadcrumb2'       => 'Index'
        ]);
    })->name('admin-dashboard');

    Route::resource('/admin/matapelajaran', MataPelajaranController::class)->name('index', 'admin-matapelajaran')->except('show');
    Route::any('/pelajaran/data',[DataJs::class,'dataPelajaran'])->name('datapelajaran');
    
    Route::resource('/admin/kelas', KelasController::class)->name('index', 'admin-kelas')->except('show');
    Route::any('/kelas/data',[DataJs::class,'dataKelas'])->name('datakelas');
    
    Route::resource('/admin/siswa', SiswaController::class)->name('index', 'admin-siswa')->except('show');
    Route::any('/siswa/data',[DataJs::class,'dataSiswa'])->name('dataSiswa');
    Route::post('/admin/siswa/resetpassword', [SiswaController::class,'resetpassword']);

});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    Lfm::routes();
});