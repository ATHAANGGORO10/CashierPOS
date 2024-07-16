@include('bluprint.cloud')

<div class="container">
    <div class="row vh-100 d-flex justify-content-center align-items-center">
        <div class="col-lg-6">
            <div class="card-body">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                </div> 
                {{-- @error('name') is-invalid @enderror --}}
                <form class="user" action="{{ route('register.save') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input name="name" type="text"
                            class="form-control form-control-user border border-dark"
                            id="exampleFirstName" placeholder="First Name" autocomplete="username">
                        @error('name')
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    Swal.fire({
                                        toast: 'true',
                                        position: 'bottom-end',
                                        icon: 'error',
                                        text: '{{ $message }}',
                                        showConfirmButton: false,
                                        timer: 5500,
                                        customClass: {
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
                        @enderror
                    </div>
                    <div class="form-group">
                        <input name="email" type="email"
                            class="form-control form-control-user border border-dark"
                            id="exampleInputEmail" placeholder="Email Address" autocomplete="email">
                        @error('email')
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    Swal.fire({
                                        toast: 'true',
                                        position: 'bottom-end',
                                        icon: 'error',
                                        text: '{{ $message }}',
                                        showConfirmButton: false,
                                        timer: 5500,
                                        showClass: {
                                            popup: 'animate__animated animate__fadeInRight'
                                        },
                                        hideClass: {
                                            popup: 'animate__animated animate__fadeOutRight'
                                        }
                                    });
                                });
                            </script>
                        @enderror
                    </div>
                    <div class="form-group position-relative">
                        <input name="password" type="password"
                            class="form-control form-control-user border border-dark"
                            id="exampleInputPassword" placeholder="Password" autocomplete="current-password">
                        <a type="button" id="togglePassword1" class="btn position-absolute"
                            style="top: 50%; right: 10px; transform: translateY(-50%);">
                            <i class="bi bi-eye-slash"></i>
                        </a>
                        @error('password')
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    Swal.fire({
                                        toast: 'true',
                                        position: 'bottom-end',
                                        icon: 'error',
                                        text: '{{ $message }}',
                                        showConfirmButton: false,
                                        timer: 5500,
                                        showClass: {
                                            popup: 'animate__animated animate__fadeInRight'
                                        },
                                        hideClass: {
                                            popup: 'animate__animated animate__fadeOutRight'
                                        }
                                    });
                                });
                            </script>
                        @enderror
                    </div>
                    <div class="form-group position-relative">
                        <input name="password_confirmation" type="password"
                            class="form-control form-control-user border border-dark"
                            id="exampleRepeatPassword" placeholder="Repeat Password" autocomplete="current-password">
                        <a type="button" id="togglePassword2" class="btn position-absolute"
                            style="top: 50%; right: 10px; transform: translateY(-50%);">
                            <i class="bi bi-eye-slash"></i>
                        </a>
                        @error('password_confirmation')
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    Swal.fire({
                                        toast: 'true',
                                        position: 'bottom-end',
                                        icon: 'error',
                                        text: '{{ $message }}',
                                        showConfirmButton: false,
                                        timer: 5500,
                                        showClass: {
                                            popup: 'animate__animated animate__fadeInRight'
                                        },
                                        hideClass: {
                                            popup: 'animate__animated animate__fadeOutRight'
                                        }
                                    });
                                });
                            </script>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block mt-4">
                        Register Account
                    </button>
                </form>
                <div class="text-center">
                    <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                </div>
            </div>
        </div>
    </div>
</div>
@include('bluprint.provider')
