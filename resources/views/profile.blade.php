@extends('layouts.app')

@section('title', 'profile settings')

@section('contents')
    @if (Session::has('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
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
    <form class="pt-4" action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data"
        id="profile_setup_frm">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="row">@csrf
                    <div class="col-sm-3 d-flex align-items-center">
                        <i class="bi-person-circle mr-3 text-primary"></i>
                        <h6 class="mb-0">Username</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input class="w-100" name="name" placeholder="Username" type="text"
                            value="{{ auth()->user()->name }}" style="border: none; outline: none;" required>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3 d-flex align-items-center">
                        <i class="bi-envelope-at-fill mr-3 text-danger"></i>
                        <h6 class="mb-0">Email Account</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input class="w-100" name="email" placeholder="Gmail Account" type="email"
                            value="{{ auth()->user()->email }}" style="border: none; outline: none;" required>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3 d-flex align-items-center">
                        <i class="bi-telephone-plus mr-3 text-success"></i>
                        <h6 class="mb-0">Number Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input class="w-100" name="phone" placeholder="Number Phone" type="number"
                            value="{{ auth()->user()->phone }}" style="border: none; outline: none;" required>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3 d-flex align-items-center">
                        <i class="bi-building-add mr-3 text-info"></i>
                        <h6 class="mb-0">Your Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input class="w-100" name="address" placeholder="Your Address" type="text"
                            value="{{ auth()->user()->address }}" style="border: none; outline: none;" required>
                    </div>
                </div>
                <hr>
                <div class="row pt-2">@csrf
                    <div class="col-sm-12">
                        <button id="btn" type="submit" class="btn btn-primary px-4 py-2 mr-2 align-item-center">
                            <i class="bi-save mr-1"></i>
                            Save Profile
                        </button>
                        <a href="{{ route('logout') }}" class="btn btn-primary px-4 py-2 mr-2 align-item-center">
                            <i class="bi-emoji-dizzy-fill mr-1"></i>
                            Outs Profile
                        </a>
                        <div class="file-upload btn btn-primary px-4 py-2 align-item-center">
                            <label class="mb-0">
                                <i class="bi-upload mr-1"></i>
                                Upload Image
                            </label>
                            <input name="photo" type="file" accept="image/*">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
