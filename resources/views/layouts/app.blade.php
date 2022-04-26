<!doctype html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <title>Synergy Packaging | Panneau d'administration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="HRekik" name="author">

    <!-- Bootstrap Css -->
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css">
    <!-- Icons Css -->
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" >
    <!-- App Css-->
    <link href="{{ asset('admin/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css">
    <link defer rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    @yield('css')
</head>

<body data-sidebar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="#" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{ asset('website/images/logo.png') }}" alt="" height="22" width="25">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('website/images/logo.png') }}" alt="" height="40">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{ asset('website/images/logo.png') }}" alt="" height="22" width="25">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('website/images/logo.png') }}" alt="" height="40">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="mdi mdi-menu"></i>
                    </button>


                </div>

                <div class="d-flex">
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="" alt="Header Avatar"><i class=" ml-5 fas fa-user"></i>
                                {{ Auth::user()->name }}
                            </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="{{ route('website.home') }}"><i
                                    class="fas fa-home mr-5"></i> Visiter le site</a>
                            <div class="dropdown-divider"></div>

                            <a href="{{ url('/logout') }}" class="dropdown-item btn btn-default btn-flat text-danger"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-lock mr-5"></i> Se
                                déconnecter
                            </a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">
                <!--- Sidemenu -->
                @include('layouts.sidebar-menu')
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        )

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> Synergy Packaging<span class="d-none d-sm-inline-block"> - Crafted with <i
                                    class="mdi mdi-heart text-danger"></i> by <a
                                    href="https://BKH-LAB.com/">BKH-LAB</a>.</span>
                        </div>
                    </div>
                </div>
            </footer>


        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->
    <!-- JAVASCRIPT -->
    <script src="{{ asset('admin/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>
    @yield('js')

</body>

</html>
