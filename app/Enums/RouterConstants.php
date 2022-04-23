<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class RouterConstants extends Enum
{
    const getHome = 'getHome';
    const getLogin = 'getLogin';
    const getRegister = 'getRegister';
    const postDangKy = 'postDangKy';
    const postLogin = 'postLogin';
    const renderForgotPasswordPage = 'renderForgotPasswordPage';
    const changePassword = 'changePassword';
    const addTodoWork = 'addTodoWork';
}
