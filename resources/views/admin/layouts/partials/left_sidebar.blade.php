<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('assets')}}/backend/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{env('APP_NAME')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('assets')}}/backend/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu"
            data-accordion="false">

            {{-- Dashboard --}}
            @can('user_management_access')
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}"
                    class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        {{ trans('global.dashboard') }}
                    </p>
                </a>
            </li>
            @endcan

            {{-- Manage Books --}}
            <li class="nav-item ">
                <a href="/" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Manage Books
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="#bookslist" class="nav-link">
                            <i class="nav-icon fas fa-list"></i>
                            <p>Books List</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.books.index') }}"
                            class="nav-link {{ Request::is('admin/books*') ? 'active' : null }}">
                            <i class="nav-icon fas fa-book"></i>
                            <p>Add Books</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#booksborrow" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>Books Borrow</p>
                        </a>
                    </li>

                </ul>
            </li>
            {{-- Issue Books --}}
            <li class="nav-item">
                <a href="#issuebooks" class="nav-link {{ Request::is('admin/issuebooks') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-id-card"></i>
                    <p>
                        Issue Books
                    </p>
                </a>
            </li>
            {{-- Return Books --}}
            <li class="nav-item">
                <a href="#returnbooks" class="nav-link {{ Request::is('admin/returnbooks') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-id-card"></i>
                    <p>
                        Return Books
                    </p>
                </a>
            </li>

            {{-- Manage Club Au --}}
            <li class="nav-item ">
                <a href="/" class="nav-link">
                    <i class="nav-icon fas fa-user-tie"></i>
                    <p>
                        Manage Club Au
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#createmember" class="nav-link">
                            <i class="nav-icon fas fa-user-plus"></i>
                            <p>Create Member</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#clubmember" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Club Member</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#studnt" class="nav-link">
                            <i class="nav-icon fas fa-user-graduate"></i>
                            <p>Student</p>
                        </a>
                    </li>

                </ul>
            </li>

            {{-- Payment --}}
            <li class="nav-item ">
                <a href="/" class="nav-link">
                    <i class="nav-icon fas fa-hand-holding-usd"></i>
                    <p>
                        Payment
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#generation" class="nav-link">
                            <i class="nav-icon fas fa-credit-card"></i>
                            <p>Add Payment</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#group" class="nav-link">
                            <i class="nav-icon fas fa-list"></i>
                            <p>Payment List</p>
                        </a>
                    </li>
                </ul>
            </li>

            {{-- Report --}}
            @can('category-blog_access')
            <li class="nav-item">
                <a href="{{ route('admin.category-blogs.index') }}"
                    class="nav-link {{ Request::is('admin/category-blogs*') ? 'active' : null }}">
                    <i class="nav-icon fas fa-industry"></i>
                    <p>Report</p>
                </a>
            </li>
            @endcan
            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
            @can('user_management_access')
            {{-- User Management --}}
            <li
                class="nav-item {{ Request::is('admin/permissions*') || Request::is('admin/roles*') || Request::is('admin/users*') ? 'active menu-is-opening menu-open' : '' }}">
                <a href="/"
                    class="nav-link {{ Request::is('admin/roles*') || Request::is('admin/users*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-users-cog"></i>
                    <p>
                        {{ trans('cruds.userManagement.title') }}
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    @can('permission_access')
                    <li class="nav-item">
                        <a href="{{ route('admin.permissions.index') }}"
                            class="nav-link {{ Request::is('admin/permissions*') ? 'active' : null }}">
                            <i class="nav-icon fas fa-briefcase"></i>
                            <p>{{ trans('cruds.permission.title') }}</p>
                        </a>
                    </li>
                    @endcan
                    @can('role_access')
                    <li class="nav-item">
                        <a href="{{ route('admin.roles.index') }}"
                            class="nav-link {{ Request::is('admin/roles*') ? 'active' : null }}">
                            <i class="nav-icon fas fa-briefcase"></i>
                            <p>{{ trans('cruds.role.title') }}</p>
                        </a>
                    </li>
                    @endcan
                    @can('user_access')
                    <li class="nav-item">
                        <a href="{{ route('admin.users.index') }}"
                            class="nav-link {{ Request::is('admin/users*') ? 'active' : null }}">
                            <i class="nav-icon fas fa-user"></i>
                            <p>{{ trans('cruds.user.title') }}</p>
                        </a>
                    </li>
                    @endcan
                </ul>
            </li>
            {{-- Notification --}}
            <li class="nav-item">
                <a href="#school" class="nav-link {{ Request::is('admin/idpoor') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-bullhorn"></i>
                    <p>
                        Notification
                    </p>
                </a>
            </li>
            @endcan
            <li class="nav-item">
                <a href="#" class="nav-link"
                    onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt"></i>
                    <p>
                        {{ trans('Logout') }}
                    </p>
                </a>
                <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>