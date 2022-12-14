<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="image text-center">
        <img src="{{ asset('dist/img/pns2.png') }}" class="p-1" alt="User Image" width="100%">
    </div>
    <!-- Sidebar -->
    <div class="sidebar mt-5">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dd.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-marker"></i>
                        <p>
                            Daily Declaration
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('art.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-marker"></i>
                        <p>
                            Art Test
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Setting
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>