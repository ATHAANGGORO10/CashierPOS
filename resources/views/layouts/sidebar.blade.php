<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('products') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Product</span></a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Chart</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/profile">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Profile</span></a>
    </li>
    <div class="text-center d-none d-md-inline pt-5">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
