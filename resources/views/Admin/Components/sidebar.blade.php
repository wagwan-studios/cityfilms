<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
                <div class="sidebar-brand-icon">
                    <div class="sidebar-brand-text mx-3"><img src="{{ asset('assets/images/CITYFILMS.png') }}" alt="Brand Logo" width="90px" height="70px"></div>
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Nav Item - Pages -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Pages</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Nav Item - Categories -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.categories.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Categories</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Nav Item - Portfolio -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.portfolio.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Portfolio</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
