@extends('layouts.app')

@section('title', 'profile settings')

@section('contents')
    @if (Session::has('success'))
        <script>
            document.addEventListener('DOMContensLoaded', function() {
                Swal.fire({
                    toast: 'true',
                    position: 'bottom-end',
                    icon: 'success',
                    text: '{{ Session::get('success') }}',
                    showConfirmButton: false,
                    timer: 5500,
                    customClass: {
                        content: 'swal-text-left'
                    },
                    showClass: {
                        popup: 'animate__animated animate__fadeInRight'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutRight'
                    }
                });
            });
        </script>
    @endif
    <form class="pt-4" action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" id="profile_setup_frm">
        @csrf
        <div class="row">
            <div class="col-md-12 boredr-right">
                <div class="row mt-2">
                    <div class="col-md-6">
                        <h5 class="mb-3">Your Name : <small>{{ auth()->user()->name }}</small></h3>
                        <input type="text" name="name" class="form-control form-control-lg border border-dark"
                            placeholder="first name" value="{{ auth()->user()->name }}" required>
                    </div>
                    <div class="col-md-6">
                        <h5 class="mb-3">Your Email : <small>{{ auth()->user()->email }}</small></h3>
                        <input type="email" name="email" class="form-control form-control-lg border border-dark"
                            placeholder="Email" value="{{ auth()->user()->email }}" required>
                    </div>
                    <div class="col-md-6 pt-4">
                        <h5 class="mb-3">Your Phone : <small>{{ auth()->user()->phone }}</small></h5>
                        <input type="number" name="phone" class="form-control form-control-lg border border-dark"
                            placeholder="Phone Number" value="{{ auth()->user()->phone }}" required>
                    </div>
                    <div class="col-md-6 pt-4 mb-4">
                        <h5 class="mb-3">Your Address : <small>{{ auth()->user()->address }}</small></h4>
                        <input type="text" name="address" class="form-control form-control-lg border border-dark"
                            placeholder="Address" value="{{ auth()->user()->address }}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button id="btn" type="submit" class="btn btn-primary px-4 py-2 mr-2 align-item-center">
                            <i class="bi-save mr-1"></i>
                            Save Profile
                        </button>
                        <a href="{{ route('logout') }}" class="btn btn-primary px-4 py-2 align-item-center">
                            <i class="bi-emoji-dizzy-fill mr-1"></i>
                            Outs Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @csrf
        <div class="form-group mt-4">
            <label for="photo">Change Profile Photo:</label>
            <input type="file" class="form-control-file" id="photo" name="photo">
        </div>
    </form>
@endsection
