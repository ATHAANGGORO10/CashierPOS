@section('title', 'dashboard admin panel')

<head>
    @include('bluprint.cloud')
</head>

<body>
    <div id="wrapper">
        @include('layouts.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            @include('layouts.navbar')
            <div class="container-fluid">
                @yield('contents')
            </div>
        </div>
    </div>
    @include('bluprint.provider')
</body>
