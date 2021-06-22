<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="{{ route('getHome') }}">TO DO</a>
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
                <a class="nav-link" href="#">Create todo</a>
            </li>
        </ul>

        <!-- <form class="form-inline my-2 my-lg-0">
             <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
             <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
         </form>-->
        <a href="{{ route('getLogin') }}" class="btn btn-primary">
            <i class="fa fa-user" aria-hidden="true"></i> Đăng nhập
        </a>

        <a href="{{ route('getRegister') }}" class="btn btn-info ml-2">
            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Đăng ký
        </a>

    </div>
</nav>
