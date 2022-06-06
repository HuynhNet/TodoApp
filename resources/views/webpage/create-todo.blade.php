@extends('layouts.master')
@section(\App\Enums\ComponentNameConstants::pageTitle, 'Create todo')

@section(\App\Enums\ComponentNameConstants::header)
    @include('layouts.header')
@endsection


@section(\App\Enums\ComponentNameConstants::content)
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form action="{{ route(\App\Enums\RouterConstants::addTodoWork) }}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-header text-center">
                            {{ trans('createTodoPage.header') }}
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="to-do-title">{{ trans('createTodoPage.todoTitle') }}</label>
                                <input type="text"
                                       class="form-control" name="todoTitle" id="to-do-title">
                            </div>

                            <div class="form-group">
                                <label for="to-do-description">{{ trans('createTodoPage.todoDescription') }}</label>
                                <textarea class="form-control" name="todoDescription" id="to-do-description" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="card-footer text-muted text-right">
                            <a href="" class="btn btn-secondary" title="Refresh">
                                <i class="fa fa-refresh" aria-hidden="true"></i>
                            </a>

                            <a href="" class="btn btn-primary">{{ trans('buttons.saveBtn') }}</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


