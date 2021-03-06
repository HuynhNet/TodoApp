@extends('layouts.master')

@section(\App\Enums\ComponentNameConstants::pageTitle, 'Đăng ký')

@section(\App\Enums\ComponentNameConstants::linkCss)
    <link rel="stylesheet" href="{{ asset('public/css/webpage/register.css') }}">
@endsection

@section(\App\Enums\ComponentNameConstants::header)
    @include('layouts.header')
@endsection

<br><br>

@section(\App\Enums\ComponentNameConstants::content)
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        Đăng ký tài khoản
                    </div>
                    <div class="card-body">
                        <form action="{{ route(\App\Enums\RouterConstants::postDangKy) }}" method="POST" class="needs-validation" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="txtUsername">Họ tên</label>
                                        <input type="text" class="form-control" name="userNameInputed" id="userNameInputed" aria-describedby="helpId"
                                               placeholder="Nguyễn văn A" required>
                                        <div class="invalid-feedback">Vui lòng nhập họ tên</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Mật khẩu</label>
                                        <input type="password" class="form-control" name="passwordInputed" id="passwordInputed" required>
                                        <div class="invalid-feedback">Vui lòng nhập mật khẩu.</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Giới tính</label>
                                        <select class="form-control" name="genderInputed" id="genderInputed" required>
                                            <option value="" disabled selected>-- Chọn giới tính --</option>
                                            <option value="Nam">Nam</option>
                                            <option value="Nữ">Nữ</option>
                                        </select>
                                        <div class="invalid-feedback">Vui lòng chọn giới tính.</div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" name="emailInputed" id="emailInputed"
                                               aria-describedby="helpId" placeholder="nguyena@gmail.com"
                                               required onblur="isEmail()">
                                        <div class="invalid-feedback">Vui lòng nhập email.</div>
                                        <small class="form-text text-muted">{{ $errors->first('emailInputed') }}</small>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Điện thoại</label>
                                        <input type="text" class="form-control" name="phoneNumberInputed" id="phoneNumberInputed"
                                               aria-describedby="helpId" placeholder="0859134539" required
                                               onblur="isPhoneNumber()">
                                        <div class="invalid-feedback">Vui lòng nhập số điện thoại.</div>
                                        <small class="form-text text-muted">{{ $errors->first('phoneNumberInputed') }}</small>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Ngày sinh</label>
                                        <input type="date" class="form-control" name="birthdayInputed" id="birthdayInputed" required>
                                        <div class="invalid-feedback">Vui lòng nhập ngày sinh.</div>
                                    </div>

                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-info" id="registerBtn">
                                        Đăng ký
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-notification.top-right-alert sessionName="registerSuccess" />
@endsection

@section('link-js')
    <script src="{{ asset('public/js/webpage/validate-form.js') }}"></script>
    <script src="{{ asset('public/js/webpage/validate-phone-number.js') }}"></script>
    <script src="{{ asset('public/js/webpage/dang-ky.js') }}"></script>
    <script src="{{ asset('public/js/webpage/validate-email.js') }}"></script>
@endsection
