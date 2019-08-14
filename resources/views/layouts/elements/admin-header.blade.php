<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="{{ asset('img/logo.png') }}" width="89" height="25" alt="Scuti Laravel">
        <img class="navbar-brand-minimized" src="{{ asset('img/logo.png') }}" width="30" height="30" alt="Scuti Laravel">
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
            <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="#">Users</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="#">Settings</a>
        </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown d-md-down-none">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="icon-bell"></i>
                <span class="badge badge-pill badge-danger">5</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                <div class="dropdown-header text-center">
                    <strong>You have 5 notifications</strong>
                </div>
                <a class="dropdown-item" href="#">
                    <i class="icon-user-follow text-success"></i> New user registered</a>
                <a class="dropdown-item" href="#">
                    <i class="icon-user-unfollow text-danger"></i> User deleted</a>
                <a class="dropdown-item" href="#">
                    <i class="icon-chart text-info"></i> Sales report is ready</a>
                <a class="dropdown-item" href="#">
                    <i class="icon-basket-loaded text-primary"></i> New client</a>
                <a class="dropdown-item" href="#">
                    <i class="icon-speedometer text-warning"></i> Server overloaded</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            @php
                $user = Auth::user();
                $avatar = !empty($user->avatar) ? $user->avatar : asset('img/default-avatar.png');
            @endphp
            <a class="nav-link nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <img class="img-avatar" src="{{ $avatar }}" alt="{{ $user->name }}">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    <strong>Account</strong>
                </div>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-user"></i> Profile</a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-wrench"></i> Settings</a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-lock"></i> Logout</a>
            </div>
        </li>
    </ul>
    <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
        <span class="navbar-toggler-icon"></span>
    </button>
</header>