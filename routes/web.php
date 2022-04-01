<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrangChuController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/trang-chu', [TrangChuController::class, 'getHome'])->name('getHome');

Route::get('/dang-nhap', [TrangChuController::class, 'getLogin'])->name('getLogin');

Route::get('/dang-ky', [TrangChuController::class, 'getRegister'])->name('getRegister');

Route::post('/post-dang-ky', [TrangChuController::class, 'postDangKy'])->name('postDangKy');

Route::post('/post-dang-nhap', [TrangChuController::class, 'postLogin'])->name('postLogin');





