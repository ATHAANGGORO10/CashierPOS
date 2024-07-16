@include('bluprint.cloud')

<body>
    <div class="container">
        <div class="row vh-100 d-flex justify-content-center align-items-center">
            <div class="col-lg-6">
                <div class="card-body">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                    </div>
                    <form class="user" action="{{ route('login.action') }}" method="POST">
                        @csrf
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="form-group">
                            <input name="email" type="email"
                                class="form-control form-control-user border border-dark" id="exampleInputEmail"
                                aria-describedby="emailHelp" placeholder="Your Email" autocomplete="username">
                        </div>
                        <div class="form-group position-relative">
                            <input name="password" type="password"
                                class="form-control form-control-user border border-dark" id="exampleInputPassword"
                                placeholder="Your Password" autocomplete="current-password">
                            <a type="button" id="togglePassword1" class="btn position-absolute"
                                style="top: 50%; right: 10px; transform: translateY(-50%);">
                                <i class="bi-eye-slash"></i>
                            </a>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox small">
                                <input name="remember" type="checkbox" class="custom-control-input border border-dark"
                                    id="customCheck">
                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                    </form>
                    <div class="text-center">
                        <a class="small" href="{{ route('register') }}">Create an Account!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('bluprint.provider')
</body>
