<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class SessionConstants extends Enum
{
    const loginFail = 'loginFail';
    const registerSuccess = 'registerSuccess';
    const confirmPasswordFail = 'confirmPasswordFail';
    const notExistedEmail = 'notExistedEmail';
    const changePasswordSuccess = 'changePasswordSuccess';
}
