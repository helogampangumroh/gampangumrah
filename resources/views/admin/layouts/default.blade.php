<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @section('title')
            | GHP
        @show
    </title>

    <!-- global css -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />



    <!-- end of global css -->

    <!--page level css-->
    @yield('header_styles')
    <!--end of page level css-->

<body class="skin-josh">
    <header class="header">
        <a href="{{ route('admin.dashboard') }}" class="logo">
            <img src="{{ asset('img/logo.png') }}" alt="logo">
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <div class="position-abs">
                <a href="#menu" class="navbar-btn sidebar-toggle" data-bs-toggle="offcanvas" role="button">
                    <div class="responsive_nav"></div>
                </a>
            </div>
            <div class="navbar-right toggle ms-auto">
                <ul class="nav navbar-nav flex-row">
                    @include('admin.layouts._messages')
                    @include('admin.layouts._notifications')
                    <li class=" nav-item dropdown user user-menu">
                        <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                            @if (Sentinel::getUser()->pic)
                                <img src="{{ Sentinel::getUser()->pic }}" alt="img" height="35px" width="35px"
                                    class="rounded-circle img-fluid float-start" />
                            @elseif(Sentinel::getUser()->gender === 'male')
                                <img src="{{ asset('images/authors/avatar3.png') }}" alt="img" height="35px"
                                    width="35px" class="rounded-circle img-fluid float-start" />
                            @elseif(Sentinel::getUser()->gender === 'female')
                                <img src="{{ asset('images/authors/avatar5.png') }}" alt="img" height="35px"
                                    width="35px" class="rounded-circle img-fluid float-start" />
                            @else
                                <img src="{{ asset('images/authors/no_avatar.jpg') }}" alt="img" height="35px"
                                    width="35px" class="rounded-circle img-fluid float-start" />
                            @endif
                            <div class="riot">
                                <div>
                                    <p class="user_name_max">{{ Sentinel::getUser()->first_name }}
                                        {{ Sentinel::getUser()->last_name }}</p>
                                    <span>
                                        <i class="caret"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu position-abs">
                            <!-- User image -->
                            <li class="user-header bg-light-blue">
                                @if (Sentinel::getUser()->pic)
                                    <img src="{{ Sentinel::getUser()->pic }}" alt="img" height="35px"
                                        width="35px" class="rounded-circle img-fluid float-start" />
                                @elseif(Sentinel::getUser()->gender === 'male')
                                    <img src="{{ asset('images/authors/avatar3.png') }}" alt="img" height="35px"
                                        width="35px" class="rounded-circle img-fluid float-start" />
                                @elseif(Sentinel::getUser()->gender === 'female')
                                    <img src="{{ asset('images/authors/avatar5.png') }}" alt="img" height="35px"
                                        width="35px" class="rounded-circle img-fluid float-start" />
                                @else
                                    <img src="{{ asset('images/authors/no_avatar.jpg') }}" alt="img"
                                        height="35px" width="35px" class="rounded-circle img-fluid float-start" />
                                @endif
                                <p class="topprofiletext">{{ Sentinel::getUser()->first_name }}
                                    {{ Sentinel::getUser()->last_name }}</p>
                            </li>
                            <!-- Menu Body -->
                            <li>
                                <a href="{{ URL::route('admin.users.show', Sentinel::getUser()->id) }}">
                                    <i class="livicon" data-name="user" data-s="18"></i>
                                    My Profile
                                </a>
                            </li>
                            <li role="presentation"></li>
                            <li>
                                <a href="{{ route('admin.users.edit', Sentinel::getUser()->id) }}">
                                    <i class="livicon" data-name="gears" data-s="18"></i>
                                    Account Settings
                                </a>
                            </li>
                            <!-- Menu Footer-->
                            <li>
                                <a href="{{ URL::to('admin/logout') }}">
                                    <i class="livicon" data-name="sign-out" data-s="18"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </nav>
    </header>
    <div class="wrapper ">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side ">
            <section class="sidebar ">
                <div class="page-sidebar  sidebar-nav pt-4">
                    <!-- BEGIN SIDEBAR MENU -->
                    @include('admin.layouts._left_menu')
                    <!-- END SIDEBAR MENU -->
                </div>
            </section>
        </aside>
        <aside class="right-side">

            <!-- Notifications -->
            <div id="notific">
                @include('notifications')
            </div>

            <!-- Content -->
            @yield('content')

        </aside>
        <!-- right-side -->
    </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button"
        title="Return to top" data-bs-toggle="tooltip" data-bs-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff"
            data-hc="white"></i>
    </a>
    <!-- global js -->

    <script src="{{ asset('js/admin.js') }}" type="text/javascript"></script>


    <!-- end of global js -->
    <!-- begin page level js -->
    @yield('footer_scripts')
    <!-- end page level js -->
</body>

</html>
