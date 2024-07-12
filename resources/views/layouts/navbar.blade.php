<div class="d-flex align-items-center px-4 py-3">
    <h3 class="mb-0 text-uppercase font-bold">dashboard admin panel</h3>
    <div class="d-flex align-items-center ml-auto">
        <img class="img-profile rounded-circle border border-primary" src="{{ asset('admin_assets/img/undraw_profile.svg') }}" width="47">
        <div class="d-none d-lg-inline ml-2 text-left">
            <div class="medium">{{ auth()->user()->name }}</div>
            <small>{{ auth()->user()->level }}</small>
            <span class="small">New York City, USA</span>
        </div>
    </div>
</div>
