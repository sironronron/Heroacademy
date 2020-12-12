<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{ route('welcome') }}">
            <img src="https://www.udemy.com/staticx/udemy/images/v6/logo-coral.svg" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg">
                        </span>
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
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('argon') }}/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}">
                        <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() === 'student.my_learnings.all_courses' ? 'active collapsed' : '' }} {{ Route::currentRouteName() === 'student.my_learnings.collections' ? 'active collapsed' : '' }} {{ Route::currentRouteName() === 'student.my_learnings.wishlist' ? 'active collapsed' : '' }} {{ Route::currentRouteName() === 'student.my_learnings.archived' ? 'active collapsed' : '' }}" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                        <i class="ni ni-books text-warning"></i>
                        <span>My Learnings</span>
                    </a>

                    <div class="collapse {{ Route::currentRouteName() === 'student.my_learnings.all_courses' ? 'show' : '' }} {{ Route::currentRouteName() === 'student.my_learnings.collections' ? 'show' : '' }} {{ Route::currentRouteName() === 'student.my_learnings.wishlist' ? 'show' : '' }} {{ Route::currentRouteName() === 'student.my_learnings.archived' ? 'show' : '' }}" id="navbar-examples" style="">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() === 'student.my_learnings.all_courses' ? 'active' : '' }}" href="{{ route('student.my_learnings.all_courses') }}">
                                    All Courses
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() === 'student.my_learnings.collections' ? 'active' : '' }}" href="{{ route('student.my_learnings.collections') }}">
                                    Collections
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() === 'student.my_learnings.wishlist' ? 'active' : '' }}" href="{{ route('student.my_learnings.wishlist') }}">
                                    Wishlist
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() === 'student.my_learnings.archived' ? 'active' : '' }}" href="{{ route('student.my_learnings.archived') }}">
                                    Archived
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('student.notifications') }}" class="nav-link {{ Route::currentRouteName() === 'student.notifications' ? 'active' : '' }}">
                        <i class="ni ni-bell-55 text-info"></i> {{ __('Notifications') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('student.messages') }}" class="nav-link {{ Route::currentRouteName() === 'student.messages' ? 'active' : '' }}">
                        <i class="ni ni-chat-round text-primary"></i> {{ __('Messages') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('profile.edit') }}" class="nav-link {{ Route::currentRouteName() === 'profile.edit' ? 'active' : '' }}">
                        <i class="ni ni-circle-08"></i> {{ __('Account Settings') }}
                    </a>
                </li>
            </ul>
            <hr class="my-3">
            <h6 class="navbar-heading text-muted">{{ __('Help and Support') }}</h6>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('support.create') }}" class="nav-link {{ Route::currentRouteName() === 'support.create' ? 'active' : '' }}">
                        <i class="ni ni-support-16 text-success"></i>
                        {{ __('Support Ticket') }}
                    </a>
                </li>
            </ul>    
        </div>
    </div>
</nav>
