@extends('layouts.master')

@section('page-title', 'Đăng nhập')

@section('link-css')
    <link rel="stylesheet" href="{{ asset('public/css/webpage/login.css') }}">
@endsection

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="col-xs-12 colsw-12 col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        Đăng nhập
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="" id="" placeholder="mail@gmail.com">
                            </div>

                            <div class="form-group">
                                <label for="">Mật khẩu</label>
                                <input type="password" class="form-control" name="" id="" placeholder="">
                            </div>

                            <hr>

                            <a href="" class="btn btn-success btn-login">Đăng nhập</a>
                        </form>
                    </div>
                </div>
                <br>

                <a href="" class="text-fogot-pass"><strong>Quên mật khẩu?</strong></a>

                <span class="text-regiser">
                <a href="" class="btn-register">Đăng ký</a> nếu không có tài khoản
            </span>
            </div>
        </div>
    </div>
@endsection
