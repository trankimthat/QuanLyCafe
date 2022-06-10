<?php

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

Route::get('/', [\App\Http\Controllers\HomePageController::class, 'index']);
Route::group(['prefix' => '/admin'], function() {
    Route::get('/index', [\App\Http\Controllers\AdminController::class, 'index']);
    Route::group(['prefix' => '/danh-muc-san-pham'], function() {
        Route::get('/index', [\App\Http\Controllers\DanhMucSanPhamController::class, 'index']);
        Route::post('/index', [\App\Http\Controllers\DanhMucSanPhamController::class, 'store']);
        Route::get('/data', [\App\Http\Controllers\DanhMucSanPhamController::class, 'getData']);

        Route::get('/doi-trang-thai/{id}', [\App\Http\Controllers\DanhMucSanPhamController::class, 'doiTrangThai']);

        Route::get('/delete/{id}', [\App\Http\Controllers\DanhMucSanPhamController::class, 'destroy']);
        Route::get('/edit/{id}', [\App\Http\Controllers\DanhMucSanPhamController::class, 'edit']);
        Route::post('/update', [\App\Http\Controllers\DanhMucSanPhamController::class, 'update']);
        Route::post('/search', [\App\Http\Controllers\DanhMucSanPhamController::class, 'search']);
    });
     Route::group(['prefix' => '/san-pham'], function() {
        Route::get('/index', [\App\Http\Controllers\SanPhamController::class, 'index']);
        Route::post('/tao-san-pham', [\App\Http\Controllers\SanPhamController::class, 'HamTaoSanPhamDayNe']);

        Route::get('/danh-sach-san-pham', [\App\Http\Controllers\SanPhamController::class, 'getData']);
        Route::get('/doi-trang-thai/{id}', [\App\Http\Controllers\SanPhamController::class, 'DoiTrangThaiSanPham']);

        Route::get('/xoa-san-pham/{id}', [\App\Http\Controllers\SanPhamController::class, 'XoaSanPham']);

        Route::get('/edit/{id}', [\App\Http\Controllers\SanPhamController::class, 'editSanPham']);
        Route::post('/update', [\App\Http\Controllers\SanPhamController::class, 'updateSanPham']);
        // Route::post('/search', [\App\Http\Controllers\SanPhamController::class, 'search']);

    });
    Route::group(['prefix' => '/ban'], function() {
        Route::get('/index', [\App\Http\Controllers\BanController::class, 'index']);
        Route::post('/index', [\App\Http\Controllers\BanController::class, 'store']);
        Route::get('/data', [\App\Http\Controllers\BanController::class, 'getData']);

        Route::get('/doi-trang-thai/{id}', [\App\Http\Controllers\BanController::class, 'doiTrangThai']);

        Route::get('/delete/{id}', [\App\Http\Controllers\BanController::class, 'destroy']);
        Route::get('/edit/{id}', [\App\Http\Controllers\BanController::class, 'edit']);
        Route::post('/update', [\App\Http\Controllers\BanController::class, 'update']);
    });
    Route::group(['prefix' => '/user'], function() {
        Route::get('/index', [\App\Http\Controllers\AgentController::class, 'index']);
        Route::get('/dulieu', [\App\Http\Controllers\AgentController::class, 'getData']);
        Route::get('/dangki', [\App\Http\Controllers\AgentController::class, 'register']);
        Route::post('/register', [\App\Http\Controllers\AgentController::class, 'registerAction']);
        Route::get('/doi-trang-thai/{id}', [\App\Http\Controllers\AgentController::class, 'doiTrangThai']);
        Route::get('/delete/{id}', [\App\Http\Controllers\AgentController::class, 'destroy']);
        Route::get('/edit/{id}', [\App\Http\Controllers\AgentController::class, 'edit']);
        Route::post('/update', [\App\Http\Controllers\AgentController::class, 'update']);
    });
    Route::group(['prefix' => '/kho'], function() {
        Route::get('/index', [\App\Http\Controllers\KhoController::class, 'index']);
        Route::get('/data', [\App\Http\Controllers\KhoController::class, 'getData']);
        Route::post('/create', [\App\Http\Controllers\KhoController::class, 'store']);

        Route::get('/remove/{id}', [\App\Http\Controllers\KhoController::class, 'destroy']);
        Route::post('/updateqty', [\App\Http\Controllers\KhoController::class, 'updateqty']);
        Route::post('/updateprice', [\App\Http\Controllers\KhoController::class, 'updateprice']);
        Route::get('/createnhapkho', [\App\Http\Controllers\KhoController::class, 'create']);

    });
});
Route::group(['prefix' => '/user'], function() {
        Route::get('/login', [\App\Http\Controllers\AgentController::class, 'login']);
        Route::post('/login', [\App\Http\Controllers\AgentController::class, 'loginAction']);
});
