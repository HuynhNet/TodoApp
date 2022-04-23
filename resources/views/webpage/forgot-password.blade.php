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
                    <div class="card-header">
                        {{ trans('forgotPassword.header') }}
                    </div>
                    <div class="card-body">
                        <form action="{{ route(\App\Enums\RouterConstants::changePassword) }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="hasRegisteredEmail">{{ trans('forgotPassword.emailRegisterTitle') }}</label>
                                <input type="text"
                                       class="form-control" name="hasRegisteredEmail" id="hasRegisteredEmail"
                                       placeholder="someone@gmail.com">
                            </div>

                            <div class="form-group">
                                <label for="newPassword">{{ trans('forgotPassword.newPasswordTitle') }}</label>
                                <input type="password"
                                       class="form-control" name="newPassword" id="newPassword"/>
                            </div>

                            <div class="form-group">
                                <label for="confirmNewPassword">{{ trans('forgotPassword.confirmNewPasswordTitle') }}</label>
                                <input type="password"
                                       class="form-control" name="confirmNewPassword" id="confirmNewPassword">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-muted">
                        <a href="{{ route(\App\Enums\RouterConstants::getLogin) }}" class="btn btn-secondary">
                            {{ trans('buttons.cancelBtn') }}
                        </a>
                        <button type="submit" class="btn btn-success btn-login">
                            {{ trans('forgotPassword.changePasswordBtn') }}
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <x-notification.top-right-alert sessionName="confirmPasswordFail"/>
    <x-notification.top-right-alert sessionName="changePasswordSuccess"/>
    <x-notification.top-right-alert sessionName="notExistedEmail"/>
@endsection
