@extends('layouts.master')

@section('page-title', 'Đăng ký')

@section('link-css')
    <link rel="stylesheet" href="{{ asset('public/css/webpage/register.css') }}">
@endsection

@section('header')
    @include('layouts.header')
@endsection

<br><br>

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        Đăng ký tài khoản
                    </div>
                    <div class="card-body">
                        <form action="{{route('postDangKy')}}" method="POST" class="needs-validation" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="txtUsername">Họ tên</label>
                                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                               placeholder="Nguyễn văn A" required>
                                        <div class="invalid-feedback">Vui lòng nhập họ tên</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Mật khẩu</label>
                                        <input type="password" class="form-control" name="" id="" required>
                                        <div class="invalid-feedback">Vui lòng nhập mật khẩu.</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Giới tính</label>
                                        <select class="form-control" name="" id="" required>
                                            <option value="" disabled selected>-- Chọn giới tính --</option>
                                            <option>Nam</option>
                                            <option>Nữ</option>
                                        </select>
                                        <div class="invalid-feedback">Vui lòng chọn giới tính.</div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" name="" id=""
                                               aria-describedby="helpId" placeholder="nguyena@gmail.com"
                                               required>
                                        <div class="invalid-feedback">Vui lòng nhập email.</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Điện thoại</label>
                                        <input type="text" class="form-control" name="" id=""
                                               aria-describedby="helpId" placeholder="0859134539" required
                                              >
                                        <div class="invalid-feedback">Vui lòng nhập số điện thoại.</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Ngày sinh</label>
                                        <input type="date" class="form-control" name="" id="" required>
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
@endsection

@section('link-js')
    <script src="{{ asset('public/js/webpage/validate-form.js') }}"></script>
@endsection
