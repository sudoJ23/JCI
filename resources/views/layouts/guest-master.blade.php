<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <title>
        @yield('title')
    </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />

    <link id="pagestyle" href="{{ asset('assets/css/argon-dashboard-pro.min.css') }}" rel="stylesheet" />
</head>
<body>
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <div class="container-fluid ps-2 pe-0">
                    <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
                        <div class="container-fluid ps-2 pe-0">
                            <a href="{{ ('/') }}" class="navbar-brand font-weight-bolder ms-lg-0 ms-3">
                                SITIK
                            </a>
                            <button type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler shadow-none ms-2">
                                <span class="navbar-toggler-icon mt-2">
                                    <span class="navbar-toggler-bar bar1"></span>
                                    <span class="navbar-toggler-bar bar2"></span>
                                    <span class="navbar-toggler-bar bar3"></span>
                                </span>
                            </button>
                            <div id="navigation" class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0">
                                <ul class="navbar-nav navbar-nav-hover mx-auto">
                                    <li class="nav-item dropdown dropdown-hover mx-2">
                                        <a href="{{ route('home') }}" class="@if (request()->routeIs('home')) text-primary @else text-dark @endif nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                                            Beranda
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown dropdown-hover mx-2">
                                        <a href="{{ route('about') }}" class="@if (request()->routeIs('about')) text-primary @else text-dark @endif nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                                            Tentang Kami
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown dropdown-hover mx-2">
                                        <a href="{{ route('contact') }}" class="@if (request()->routeIs('contact')) text-primary @else text-dark @endif nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                                            Kontak Kami
                                        </a>
                                    </li>
                                </ul>
                                <ul class="navbar-nav d-lg-block d-none">
                                    <li class="nav-item">
                                        <a href="{{ route('login') }}" class="btn btn-sm  btn-primary  mb-0 me-1">Log In</a>
                                        <a href="{{ route('register') }}" class="btn btn-sm  btn-outline-primary  mb-0 me-1">Register</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="min-height-331 bg-primary w-100">
            <div class="row mt-4">
                <div class="col-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        <footer class="footer pt-3">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            made with <i class="fa fa-heart text-warning"></i> by
                            <a href="https://www.billingmikrotik.com" class="font-weight-bold"
                                target="_blank">Breathy</a>
                            for a better web.
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.billingmikrotik.com" class="nav-link text-muted"
                                    target="_blank">Sponsored by Billing Mikrotik</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</body>
</html>