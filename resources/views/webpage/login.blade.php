@extends('layouts.master')

@section(\App\Enums\ComponentNameConstants::pageTitle, 'Đăng nhập')

@section(\App\Enums\ComponentNameConstants::linkCss)
    <link rel="stylesheet" href="{{ asset('public/css/webpage/login.css') }}">
@endsection

@section(\App\Enums\ComponentNameConstants::header)
    @include('layouts.header')
@endsection

@section(\App\Enums\ComponentNameConstants::content)
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="col-xs-12 col-sw-12 col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        Đăng nhập
                    </div>
                    <div class="card-body">
                        <form action="{{ route(\App\Enums\RouterConstants::postLogin) }}" method="post" class="needs-validation" novalidate>
                            @csrf

                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="email-login" id="emailLogin" placeholder="mail@gmail.com" required>
                                <div class="invalid-feedback">Vui lòng nhập email</div>
                            </div>

                            <div class="form-group">
                                <label for="">Mật khẩu</label>
                                <input type="password" class="form-control" name="password-login" id="passwordLogin" placeholder="" required>
                                <div class="invalid-feedback">Vui lòng nhập mật khẩu</div>
                            </div>
                            <hr>

                            <button type="submit" class="btn btn-success btn-login">Đăng nhập</button>
                        </form>
                    </div>
                </div>
                <br>

                <a href="{{ route(\App\Enums\RouterConstants::renderForgotPasswordPage) }}" class="text-fogot-pass"><strong>Quên mật khẩu?</strong></a>
                <span class="text-regiser">
                <a href="{{ route(\App\Enums\RouterConstants::getRegister) }}" class="btn-register">Đăng ký</a> nếu không có tài khoản
            </span>
            </div>
        </div>
    </div>

    <x-notification.top-right-alert sessionName="loginFail" />
    <x-notification.top-right-alert sessionName="changePasswordSuccess" />
@endsection

@section('link-js')
    <script src="{{ asset('public/js/webpage/validate-form.js') }}"></script>
@endsection
