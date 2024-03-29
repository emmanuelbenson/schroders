<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard </title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('assets/admin/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/admin/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/admin/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/admin/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('assets/admin/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('assets/admin/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/admin/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/admin/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/admin/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/admin/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/admin/vendor/vector-map/jqvmap.min.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('assets/admin/css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body class="animsition">
<div class="page-wrapper">
    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar2">
        <div class="logo">
            <a href="{{ url('/') }}">
                {{--<img src="{{ asset('assets/admin/images/icon/logo-white.png') }}" alt="Cool Admin" />--}}
                Schroders
            </a>
        </div>
        <div class="menu-sidebar2__content js-scrollbar1">
            <div class="account2">
                <div class="image img-cir img-120">
                    <img src="{{ asset('uploads/avatar/'.auth()->user()->profile->avatar->avatar) }}" alt="{{ auth()->user()->first_name }}" />
                </div>
                <h4 class="name">
                    {{ auth()->user()->profile->first_name }}
                    {{ auth()->user()->profile->last_name }}
                </h4>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();"
                >
                    Sign out
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            <nav class="navbar-sidebar2">
                <ul class="list-unstyled navbar__list">
                    <li class="active has-sub">
                        <a class="js-arrow" href="{{ url('/home') }}">
                            <i class="fas fa-tachometer-alt"></i>Dashboard
                            <span class="arrow">
                                {{--<i class="fas fa-angle-down"></i>--}}
                            </span>
                        </a>
                    </li>
                    <!-- Admin Links -->
                    @role('admin')
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-users"></i>Manage Members
                            <span class="arrow">
                                <i class="fas fa-angle-down"></i>
                            </span>
                        </a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="{{ route('members') }}">
                                    <i class="fas fa-table"></i>Members</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-user"></i>My Account
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                        </a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="{{ route('admin.profile') }}">
                                    <i class="fas fa-user"></i>Profile
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endrole
                    <!-- Admin Links end -->

                    <!-- Member Links -->

                    <!-- Member Links end -->
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container2">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop2">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap2">
                        <div class="logo d-block d-lg-none">
                            <a href="#">
                                {{--<img src="images/icon/logo-white.png" alt="CoolAdmin" />--}}
                                Schroders
                            </a>
                        </div>
                        <div class="header-button2">
                            <div class="header-button-item mr-0 js-sidebar-btn">
                                <i class="zmdi zmdi-menu"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
            <div class="logo">
                <a href="{{ url('/') }}">
                    {{--<img src="{{ asset('assets/admin/images/icon/logo-white.png') }}" alt="Cool Admin" />--}}
                    Schroders
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="{{ asset('uploads/avatar/'.auth()->user()->profile->avatar->avatar) }}" alt="{{ auth()->user()->first_name }}" />
                    </div>
                    <h4 class="name">
                        {{ auth()->user()->profile->first_name }}
                        {{ auth()->user()->profile->last_name }}
                    </h4>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();"
                    >
                        Sign out
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="{{ url('/home') }}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                            <span class="arrow">
                                {{--<i class="fas fa-angle-down"></i>--}}
                            </span>
                            </a>
                        </li>
                        <!-- Admin Links -->
                        @role('admin')
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-users"></i>Manage Members
                            <span class="arrow">
                                <i class="fas fa-angle-down"></i>
                            </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('members') }}">
                                        <i class="fas fa-table"></i>Members</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user"></i>My Account
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('admin.profile') }}">
                                        <i class="fas fa-user"></i>Profile
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endrole
                                <!-- Admin Links end -->

                        <!-- Member Links -->

                        <!-- Member Links end -->
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END HEADER DESKTOP-->

        <!-- BREADCRUMB-->
        <section class="au-breadcrumb m-t-75">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END BREADCRUMB-->

        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @if(session('message'))
                            <div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
                                <span class="badge badge-pill badge-primary">Success</span>
                                {{ session('message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        @yield('content')

        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © {{ date('Y') }}. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END PAGE CONTAINER-->
    </div>

</div>

<!-- Jquery JS-->
<script src="{{ asset('assets/admin/vendor/jquery-3.2.1.min.js') }}"></script>
<!-- Bootstrap JS-->
<script src="{{ asset('assets/admin/vendor/bootstrap-4.1/popper.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
<!-- Vendor JS       -->
<script src="{{ asset('assets/admin/vendor/slick/slick.min.js') }}">
</script>
<script src="{{ asset('assets/admin/vendor/wow/wow.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/animsition/animsition.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
</script>
<script src="{{ asset('assets/admin/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/counter-up/jquery.counterup.min.js') }}">
</script>
<script src="{{ asset('assets/admin/vendor/circle-progress/circle-progress.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/chartjs/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/select2/select2.min.js') }}">
</script>

<!-- Main JS-->
<script src="{{ asset('assets/admin/js/main.js') }}"></script>

</body>

</html>
<!-- end document-->