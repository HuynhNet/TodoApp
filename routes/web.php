<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrangChuController;
use App\Enums\RouterConstants;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/trang-chu', [TrangChuController::class, 'getHome'])
    ->name(RouterConstants::getHome);

Route::get('/dang-nhap', [TrangChuController::class, 'getLogin'])
    ->name(RouterConstants::getLogin);

Route::get('/dang-ky', [TrangChuController::class, 'getRegister'])
    ->name(RouterConstants::getRegister);

Route::post('/post-dang-ky', [TrangChuController::class, 'postDangKy'])
    ->name(RouterConstants::postDangKy);

Route::post('/post-dang-nhap', [TrangChuController::class, 'postLogin'])
    ->name(RouterConstants::postLogin);

Route::get('/forgot-password', [TrangChuController::class, 'renderForgotPasswordPage'])
    ->name(RouterConstants::renderForgotPasswordPage);

Route::post('/forgot-password-process', [TrangChuController::class, 'changePassword'])
    ->name(RouterConstants::changePassword);

Route::get('/add-todo-work', [TrangChuController::class, 'addTodoWork'])
    ->name(RouterConstants::addTodoWork);





