<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrangChuController;
use App\Enums\RouterConstants;

Route::get(RouterConstants::homePageUrl, [TrangChuController::class, 'getHome'])
    ->name(RouterConstants::getHome);

Route::get(RouterConstants::loginPageUrl, [TrangChuController::class, 'getLogin'])
    ->name(RouterConstants::getLogin);

Route::get(RouterConstants::registerPageUrl, [TrangChuController::class, 'getRegister'])
    ->name(RouterConstants::getRegister);

Route::post(RouterConstants::submitRegisterUrl, [TrangChuController::class, 'postDangKy'])
    ->name(RouterConstants::postDangKy);

Route::post(RouterConstants::submitLoginUrl, [TrangChuController::class, 'postLogin'])
    ->name(RouterConstants::postLogin);

Route::get(RouterConstants::forgotPasswordUrl, [TrangChuController::class, 'renderForgotPasswordPage'])
    ->name(RouterConstants::renderForgotPasswordPage);

Route::post(RouterConstants::changePasswordUrl, [TrangChuController::class, 'changePassword'])
    ->name(RouterConstants::changePassword);

Route::get(RouterConstants::addTodoPageUrl, [TrangChuController::class, 'addTodoWork'])
    ->name(RouterConstants::addTodoWork);

Route::post(RouterConstants::postAddTodoWork, [TrangChuController::class, 'postAddTodoWork'])
    ->name(RouterConstants::postAddTodoWork);



