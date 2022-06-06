<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="{{ route(\App\Enums\RouterConstants::getHome) }}">TO DO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Danh sách <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route(\App\Enums\RouterConstants::addTodoWork) }}">Create todo</a>
            </li>
        </ul>


        @if(\Illuminate\Support\Facades\Auth::check())
            {{ \Illuminate\Support\Facades\Auth::user()->username }}
        @else
            <a href="{{ route(\App\Enums\RouterConstants::getLogin) }}" class="btn btn-primary">
                <i class="fa fa-user" aria-hidden="true"></i> Đăng nhập
            </a>

            <a href="{{ route(\App\Enums\RouterConstants::getRegister) }}" class="btn btn-info ml-2">
                <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Đăng ký
            </a>
        @endif
    </div>
</nav>
