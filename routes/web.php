<?php

use App\Http\Controllers\Admin\DataJs;
use App\Http\Controllers\Admin\MataPelajaranController;
use App\Http\Controllers\AuthAdminController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/login', function () {
    return view('pages.login', [
        'title'         => 'PATBA | LOGIN'
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
    Route::resource('/admin/matapelajaran', MataPelajaranController::class)->name('index', 'admin-matapelajaran');
    Route::any('/pelajaran/data',[DataJs::class,'dataPelajaran'])->name('datapelajaran');
});
