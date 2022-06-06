<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class RouterConstants extends Enum
{
    const homePageUrl = '/trang-chu';
    const getHome = 'getHome';

    const loginPageUrl = '/dang-nhap';
    const getLogin = 'getLogin';

    const registerPageUrl = '/dang-ky';
    const getRegister = 'getRegister';

    const submitRegisterUrl = '/post-dang-ky';
    const postDangKy = 'postDangKy';

    const submitLoginUrl = '/post-dang-nhap';
    const postLogin = 'postLogin';

    const forgotPasswordUrl = '/forgot-password';
    const renderForgotPasswordPage = 'renderForgotPasswordPage';

    const changePasswordUrl = '/forgot-password-process';
    const changePassword = 'changePassword';

    const addTodoPageUrl = '/add-todo-work';
    const addTodoWork = 'addTodoWork';

    const postAddTodoWork = 'postAddTodoWork';
}
