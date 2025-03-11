<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('admin.abouts.index') }}"
                class="nav-link {{ Request::is('admin/abouts') ? 'active' : '' }}">About Us</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('admin.contects.index') }}"
                class="nav-link {{ Request::is('admin/contects') ? 'active' : '' }}">Contect</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <div class="media" style="margin-top:-10px;">
                    <img src="{{ asset('backend') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                        alt="User Image" class="img-circle elevation-2" style="height:45px;">
                    <div class="media-body" style="margin-left:10px;">
                        <h4 class="dropdown-item-title">
                            {{ auth()->user()->name }}
                        </h4>
                        <p class="text-sm">Admin</p>
                    </div>
                </div>
            </a>
            <div class="row">
                <div class="col-md-12">
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-center">
                        <a href="{{ route('admin.profiles.index') }}"
                            class="nav-link {{ Request::is('admin/profiles') ? 'active' : '' }}">
                            <i class="fas fa-user mr-2"> Profile</i>
                        </a>
                        <a href="{{ route('admin.settings.index') }}"
                            class="nav-link {{ Request::is('admin/settings') ? 'active' : '' }}">
                            <i class="fas fa-cog mr-2"> Setting</i>
                        </a>
                        <a href="#" class="nav-link"
                            onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                            <i class="nav-icon fas fa-fw fa-sign-out-alt"> </i>{{ trans('Logout') }}
                        </a>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li> --}}
    </ul>
</nav>
