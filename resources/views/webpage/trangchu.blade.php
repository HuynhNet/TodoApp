@extends('layouts.master')

@section('page-title', 'Trang chủ')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    <div class="container">

        <div class="row mt-4">
            <div class="col-md-12">
                <h1 class="text-center">ToDo Page</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 ml-auto">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="submit" style="border-radius: 0px;">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        Danh sách công việc
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-11">
                                <div class="list-group">
                                    <a href="#"
                                       class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">List group item heading</h5>
                                            <small>3 days ago</small>
                                        </div>
                                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam
                                            eget risus varius blandit.</p>
                                        <small>Donec id elit non mi porta.</small>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-1">
                                <a href="" class="btn btn-danger mt-4" title="Xóa">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-md-11">
                                <div class="list-group">
                                    <a href="#"
                                       class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">List group item heading</h5>
                                            <small>3 days ago</small>
                                        </div>
                                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam
                                            eget risus varius blandit.</p>
                                        <small>Donec id elit non mi porta.</small>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-1">
                                <a href="" class="btn btn-danger mt-4">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-md-11">
                                <div class="list-group">
                                    <a href="#"
                                       class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">List group item heading</h5>
                                            <small>3 days ago</small>
                                        </div>
                                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam
                                            eget risus varius blandit.</p>
                                        <small>Donec id elit non mi porta.</small>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-1">
                                <a href="" class="btn btn-danger mt-4">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-md-11">
                                <div class="list-group">
                                    <a href="#"
                                       class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">List group item heading</h5>
                                            <small>3 days ago</small>
                                        </div>
                                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam
                                            eget risus varius blandit.</p>
                                        <small>Donec id elit non mi porta.</small>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-1">
                                <a href="" class="btn btn-danger mt-4">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
@endsection

