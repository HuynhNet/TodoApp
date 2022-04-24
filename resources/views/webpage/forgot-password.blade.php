@extends('layouts.master')
@section('page-title', trans('pageTitle.forgotPassword'))

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="col-xs-12 col-sw-12 col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        {{ trans('forgotPassword.header') }}
                    </div>
                    <form action="{{ route(\App\Enums\RouterConstants::changePassword) }}" method="post" class="needs-validation" novalidate>
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="hasRegisteredEmail">{{ trans('forgotPassword.emailRegisterTitle') }}</label>
                                <input type="text"
                                       class="form-control" name="hasRegisteredEmail" id="hasRegisteredEmail"
                                       placeholder="someone@gmail.com"
                                       required>
                            </div>

                            <div class="form-group">
                                <label for="newPassword">{{ trans('forgotPassword.newPasswordTitle') }}</label>
                                <input type="password"
                                       class="form-control"
                                       name="newPassword"
                                       id="newPassword"
                                       required>
                            </div>

                            <div class="form-group">
                                <label for="confirmNewPassword">{{ trans('forgotPassword.confirmNewPasswordTitle') }}</label>
                                <input type="password"
                                       class="form-control"
                                       name="confirmNewPassword"
                                       id="confirmNewPassword"
                                       required>
                            </div>
                        </div>
                        <div class="card-footer text-muted text-center">
                            <a href="{{ route(\App\Enums\RouterConstants::getLogin) }}" class="btn btn-secondary">
                                {{ trans('buttons.cancelBtn') }}
                            </a>
                            <button type="submit" class="btn btn-success btn-login">
                                {{ trans('forgotPassword.changePasswordBtn') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <x-notification.top-right-alert sessionName="confirmPasswordFail"/>
    <x-notification.top-right-alert sessionName="notExistedEmail"/>
@endsection

@section('link-js')
    <script src="{{ asset('public/js/webpage/validate-form.js') }}"></script>
@endsection
