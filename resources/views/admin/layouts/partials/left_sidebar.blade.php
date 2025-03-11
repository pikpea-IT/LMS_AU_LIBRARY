<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('backend') }}/dist/img/AdminLTELogo.png" alt="Admin Logo"
            class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
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

            <li class="nav-item">
                <a href="{{ route('admin.category-blogs.index') }}"
                    class="nav-link {{ Request::is('admin/category-blogs') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-layer-group"></i>
                    <p>
                        Category Blog
                    </p>
                </a>
            </li>

            {{-- Manage Books --}}
            <li class="nav-item ">
                <a href="{{ route('admin.managebooks.index') }}"
                    class="nav-link {{ Request::is('admin/managebooks') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Manage Books
                    </p>
                </a>
            </li>

            {{-- Manage Book --}}
            <li class="nav-item">
                <a href="{{ route('admin.borrowbooks.index') }}"
                    class="nav-link {{ Request::is('admin/borrowbooks') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-book-medical"></i>
                    <p>
                        Borrow Book
                    </p>
                </a>
            </li>
            {{-- Return Books --}}
            <li class="nav-item">
                <a href="{{ route('admin.returnbooks.index') }}"
                    class="nav-link {{ Request::is('admin/returnbooks') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Return Books
                    </p>
                </a>
            </li>
            {{-- Issue Books --}}
            <li class="nav-item">
                <a href="{{ route('admin.issuebooks.index') }}"
                    class="nav-link {{ Request::is('admin/issuebooks') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Issue Books
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
                        <a href="{{ route('admin.clubmembers.index') }}"
                            class="nav-link {{ Request::is('admin/clubmembers') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user-plus"></i>
                            <p>Create Member</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.students.index') }}"
                            class="nav-link {{ Request::is('admin/students') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user-graduate"></i>
                            <p>Student</p>
                        </a>
                    </li>
                </ul>
            </li>

            {{-- Payment --}}
            <li class="nav-item ">
                <a href="{{ route('admin.payments.index') }}"
                    class="nav-link {{ Request::is('admin/payments') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-hand-holding-usd"></i>
                    Payment
                </a>
            </li>

            {{-- Report --}}
            <li class="nav-item">
                <a href="{{ route('admin.reports.index') }}"
                    class="nav-link {{ Request::is('admin/reports') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-industry"></i>
                    <p>Report</p>
                </a>
            </li>
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
                    <a href="{{ route('admin.notifications.index') }}"
                        class="nav-link {{ Request::is('admin/notifications') ? 'active' : '' }}">
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
