<div class="d-flex align-items-center px-4 py-3">
    <div class="d-flex align-items-center">
        <h3 class="mb-0 text-uppercase font-bold" id="sidebarToggle" style="cursor: pointer">
            @yield('title')
        </h3>
    </div>
    <div class="d-flex align-items-center ml-auto">
        <div class="d-none d-lg-inline mr-3 text-right">
            <div class="medium">{{ auth()->user()->name }}</div>
            <span class="small">{{ auth()->user()->email }}</span>
        </div>
        <img class="rounded-circle border border-primary" src="{{ asset('admin-asset/img/undraw_profile.svg') }}"width="47">
    </div>
</div>
