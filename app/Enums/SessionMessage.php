<?php

namespace App\Enums;

use BenSampo\Enum\Enum;


final class SessionMessage extends Enum
{
    const loginFailMessage = 'Email hoặc mật khẩu của bạn không đúng!';
    const registerSuccessMessage = 'Đăng ký tài khoản thành công';
}
