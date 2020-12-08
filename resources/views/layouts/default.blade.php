<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Logo -->
        <link rel="shortcut icon" href="{{ asset('images/logo/128x128.ico') }}" type="image/x-icon" />
        <link rel="canonical" href="https://www.heroacademy.online">
        <title>Heroacademy - @yield('title')</title>

        <!-- Meta Tags -->
        <meta name="title" content="@yield('title')">
        <meta name="description" content="@yield('description')">
        <meta name="keywords" content="@yield('keywords')">

        <meta name="twitter:card" content="@yield('description')" />
        <meta name="twitter:site" content="" />
        <meta name="twitter:creator" content="" />

        <meta property="fb:app_id"        content="">
        <meta property="og:url"           content="@yield('url')" />
        <meta property="og:type"          content="@yield('type')" />
        <meta property="og:title"         content="@yield('title')" />
        <meta property="og:description"   content="@yield('description')" />
        <meta property="og:image:url"     content="@yield('image')" />
        <meta property="og:image:width"   content="@yield('imageWidth')" />
        <meta property="og:image:height"  content="@yield('imageHeight')" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

        <!-- Icons -->
        <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endauth
        <div id="app">
            <!-- Top navbar -->
            <nav class="navbar navbar-top navbar-expand-md navbar-light bg-white shadow-sm" id="navbar-main">
                <div class="container-fluid">
                    <!-- Brand -->
                    <a class="h4 mb-0 text-uppercase d-none d-lg-inline-block mr-lg-4" href="{{ route('home') }}">
                        <img src="https://www.udemy.com/staticx/udemy/images/v6/logo-coral.svg" height="35" alt="" class="navbar-logo">
                    </a>

                    <ul class="navbar-nav align-items-center d-none d-md-flex mr-lg-5">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <div class="media-body ml-2 d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">{{ __('Categories') }}</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-arrow" style="width: 259px;">
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">{{ __('List of Categories') }}</h6>
                                </div>
                                <a href="{{ route('profile.edit') }}" class="dropdown-item">
                                    <i class="ni ni-single-02"></i>
                                    <span>{{ __('My profile') }}</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ni ni-settings-gear-65"></i>
                                    <span>{{ __('Settings') }}</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ni ni-calendar-grid-58"></i>
                                    <span>{{ __('Activity') }}</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ni ni-support-16"></i>
                                    <span>{{ __('Support') }}</span>
                                </a>
                            </div>
                        </li>
                    </ul>

                    <!-- Form -->
                    <form class="navbar-search form-inline mr-3 d-none d-md-flex mr-lg-auto">
                        <div class="form-group mb-0">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                </div>
                                <input class="form-control" placeholder="Search for anything" type="text">
                            </div>
                        </div>
                    </form>
                    <!-- User -->
                    <ul class="navbar-nav align-items-center d-none d-md-flex">
                        @auth
                        <li class="nav-item">
                            <a href="#" class="nav-link mr-2 pr-0">
                                <div class="media align-items-center">
                                    <div class="media-body ml-2 d-none d-lg-block">
                                        <span class="mb-0 text-sm font-weight-bold">
                                            Teach in Udemy
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item dropdown mr-3">
                            <a href="#" class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <div class="media-body ml-2 d-none d-lg-block">
                                        <span class="mb-0 text-sm font-weight-bold">
                                            <i class="ni ni-cart" style="font-size: 20px;"></i>
                                        </span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">{{ __('Cart') }}</h6>
                                </div>
                                <div class="dropdown-body">
                                    <h4 class="text-center">Your Cart is Empty</h4>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-4-800x800.jpg">
                                    </span>
                                    <div class="media-body ml-2 d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->name }}</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                                </div>
                                <a href="{{ route('profile.edit') }}" class="dropdown-item">
                                    <i class="ni ni-single-02"></i>
                                    <span>{{ __('My profile') }}</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ni ni-settings-gear-65"></i>
                                    <span>{{ __('Settings') }}</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ni ni-calendar-grid-58"></i>
                                    <span>{{ __('Activity') }}</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ni ni-support-16"></i>
                                    <span>{{ __('Support') }}</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <i class="ni ni-user-run"></i>
                                    <span>{{ __('Logout') }}</span>
                                </a>
                            </div>
                        </li>
                        @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">Sign up</a>
                        </li>
                        @endauth
                    </ul>
                </div>
            </nav>

            @yield('content')

            <div class="footer bg-white border-top" style="bottom: 0; padding: 1rem 1rem;">
                <div class="container-fluid">
                    <div class="row">
                        
                    </div>
                </div>
            </div>

            <div class="footer bg-white border-top" style="bottom: 0; padding: 1rem 1rem;">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-xl-between">
                        <div class="col-xl-6">
                            <div class="copyright text-center text-xl-left text-muted">
                                &copy; {{ now()->year }} <a href="{{ route('home') }}" class="font-weight-bold ml-1" target="_blank">Heroacademy</a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                                <li class="nav-item">
                                    <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Help Center</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">Privacy Policy</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.updivision.com" class="nav-link" target="_blank">Terms and Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>

        <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        
        @stack('js')
        
        <!-- Argon JS -->
        <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
    </body>
</html>