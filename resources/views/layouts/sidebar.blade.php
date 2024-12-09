<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard.index') }}">
            <i class="bi-database-fill-dash"></i>
            <span class="mt-2">Admin Panel</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('products.index') }}">
            <i class="bi-grid-fill"></i>
            <span class="mt-2 f-bold">Data Product</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="bi-box-seam-fill"></i>
            <span class="mt-2 f-bold">Stock Product</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('customers.index') }}">
            <i class="bi-person-check-fill"></i>
            <span class="mt-2 f-bold">Customer Lists</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('profile') }}">
            <i class="bi-gear-fill"></i>
            <span class="mt-2">Profile Settings</span>
        </a>
    </li>
</ul>