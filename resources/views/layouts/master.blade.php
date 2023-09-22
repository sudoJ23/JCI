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

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard-pro/pages/dashboards/default.html " target="_blank"> <img src="../../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold">SITIK</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#dashboardsExamples" class="nav-link "
                        aria-controls="dashboardsExamples" role="button" aria-expanded="false">
                        <div
                            class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                            <i class="ni ni-shop text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboards</span>
                    </a>

                    <div class="collapse " id="dashboardsExamples">
                        <ul class="nav ms-4">
                            <li class="nav-item ">
                                <a class="nav-link " href="../../pages/dashboards/landing.html">
                                    <span class="sidenav-mini-icon"> L </span>
                                    <span class="sidenav-normal"> Landing </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="../../pages/dashboards/default.html">
                                    <span class="sidenav-mini-icon"> D </span>
                                    <span class="sidenav-normal"> Default </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="../../pages/dashboards/automotive.html">
                                    <span class="sidenav-mini-icon"> A </span>
                                    <span class="sidenav-normal"> Automotive </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="../../pages/dashboards/smart-home.html">
                                    <span class="sidenav-mini-icon"> S </span>
                                    <span class="sidenav-normal"> Smart Home </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false"
                                    href="#vrExamples">
                                    <span class="sidenav-mini-icon"> V </span>
                                    <span class="sidenav-normal"> Virtual Reality <b class="caret"></b></span>
                                </a>
                                <div class="collapse " id="vrExamples">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link " href="../../pages/dashboards/vr/vr-default.html">
                                                <span class="sidenav-mini-icon text-xs"> V </span>
                                                <span class="sidenav-normal"> VR Default </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="../../pages/dashboards/vr/vr-info.html">
                                                <span class="sidenav-mini-icon text-xs"> V </span>
                                                <span class="sidenav-normal"> VR Info </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="../../pages/dashboards/crm.html">
                                    <span class="sidenav-mini-icon"> C </span>
                                    <span class="sidenav-normal"> CRM </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <hr class="horizontal dark" />
                    <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder opacity-6">DOCS</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('product.index') }}">
                        <div
                            class="icon icon-shape icon-sm text-center  me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-align-left-2 text-dark text-sm"></i>
                        </div>
                        <span class="nav-link-text ms-1">Product</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <main class="main-content position-relative border-radius-lg ">

        <nav class="navbar navbar-main navbar-expand-lg  px-0 mx-4 shadow-none border-radius-xl z-index-sticky "
            id="navbarBlur" data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm">
                            <a class="text-white" href="javascript:;">
                                <i class="ni ni-box-2"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item text-sm text-white"><a class="opacity-5 text-white"
                                href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">DataTables</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0 text-white">DataTables</h6>
                </nav>
                <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
                    <a href="javascript:;" class="nav-link p-0">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line bg-white"></i>
                            <i class="sidenav-toggler-line bg-white"></i>
                            <i class="sidenav-toggler-line bg-white"></i>
                        </div>
                    </a>
                </div>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            @auth
                            <span class="d-sm-inline text-white d-none">{{ __(Auth::user()->name) }}</span>
                            @endauth
                            @guest
                            <a href="{{ route('login') }}"
                                class="nav-link text-white font-weight-bold px-0" target="_blank">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">Sign In</span>
                            </a>
                            @endguest
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid py-4">
            <div class="row mt-4">
                <div class="col-12">
                    @yield('content')
                </div>
            </div>

            <footer class="footer pt-3  ">
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
                                        target="_blank">Billing Mikrotik</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>

    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/datatables.js') }}"></script>

    <script src="{{ asset('assets/js/plugins/dragula/dragula.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jkanban/jkanban.js') }}"></script>
    <script>
        // const dataTableBasic = new simpleDatatables.DataTable("#datatable-basic", {
        //     searchable: false,
        //     fixedHeight: true
        // });

        const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
            searchable: true,
            fixedHeight: true
        });
    </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script src="{{ asset('assets/js/argon-dashboard-pro.min.js') }}"></script>
</body>
</html>
