<div class="header header-one">

    <!-- Sidebar Toggle -->
    <a href="javascript:void(0);" id="toggle_btn">
        <span class="toggle-bars">
            <span class="bar-icons"></span>
            <span class="bar-icons"></span>
            <span class="bar-icons"></span>
            <span class="bar-icons"></span>
        </span>
    </a>
    <!-- /Sidebar Toggle -->

    <!-- Search -->
    <div class="top-nav-search">
        <form>
            <input type="text" class="form-control" placeholder="Search here">
            <button class="btn" type="submit"><img src="{{ asset('assets/img/icons/search.svg') }}"
                    alt="img"></button>
        </form>
    </div>
    <!-- /Search -->

    <!-- Mobile Menu Toggle -->
    <a class="mobile_btn" id="mobile_btn">
        <i class="fas fa-bars"></i>
    </a>
    <!-- /Mobile Menu Toggle -->

    <!-- Header Menu -->
    <ul class="nav nav-tabs user-menu">
        <!-- Flag -->
        <li class="nav-item dropdown has-arrow flag-nav">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
                <img src="{{ asset('assets/img/flags/us1.png') }}" alt="" height="20"><span>English</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <a href="javascript:void(0);" class="dropdown-item">
                    <img src="{{ asset('assets/img/flags/us.png') }}" alt="" height="16"><span>English</span>
                </a>
                <a href="javascript:void(0);" class="dropdown-item">
                    <img src="{{ asset('assets/img/flags/fr.png') }}" alt="" height="16"><span>French</span>
                </a>
                <a href="javascript:void(0);" class="dropdown-item">
                    <img src="{{ asset('assets/img/flags/es.png') }}" alt="" height="16"><span>Spanish</span>
                </a>
                <a href="javascript:void(0);" class="dropdown-item">
                    <img src="{{ asset('assets/img/flags/de.png') }}" alt="" height="16"><span>German</span>
                </a>
            </div>
        </li>
        <!-- /Flag -->


        <li class="nav-item  has-arrow dropdown-heads ">
            <a href="javascript:void(0);" class="toggle-switch">
                <i class="fe fe-moon"></i>
            </a>
        </li>
        <li class="nav-item dropdown  flag-nav dropdown-heads">
            <a class="nav-link" data-bs-toggle="dropdown" href="#" role="button">
                <i class="fe fe-bell"></i> <span class="badge rounded-pill"></span>
            </a>
            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <span class="notification-title">Notifications</span>
                    <a href="javascript:void(0)" class="clear-noti"> Clear All</a>
                </div>
                <div class="noti-content">
                    <ul class="notification-list">
                        <li class="notification-message">
                            <a href="profile.html">
                                <div class="media d-flex">
                                    <span class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" alt=""
                                            src="{{ asset('assets/img/profiles/avatar-02.jpg') }}">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Brian Johnson</span>
                                            paid the invoice <span class="noti-title">#DF65485</span></p>
                                        <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="profile.html">
                                <div class="media d-flex">
                                    <span class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" alt=""
                                            src="{{ asset('assets/img/profiles/avatar-03.jpg') }}">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Marie Canales</span>
                                            has accepted your estimate <span class="noti-title">#GTR458789</span></p>
                                        <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="profile.html">
                                <div class="media d-flex">
                                    <div class="avatar avatar-sm">
                                        <span class="avatar-title rounded-circle bg-primary-light"><i
                                                class="far fa-user"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">New user
                                                registered</span></p>
                                        <p class="noti-time"><span class="notification-time">8 mins ago</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="profile.html">
                                <div class="media d-flex">
                                    <span class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" alt=""
                                            src="{{ asset('assets/img/profiles/avatar-04.jpg') }}">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Barbara Moore</span>
                                            declined the invoice <span class="noti-title">#RDW026896</span></p>
                                        <p class="noti-time"><span class="notification-time">12 mins
                                                ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="profile.html">
                                <div class="media d-flex">
                                    <div class="avatar avatar-sm">
                                        <span class="avatar-title rounded-circle bg-info-light"><i
                                                class="far fa-comment"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">You have received a
                                                new message</span></p>
                                        <p class="noti-time"><span class="notification-time">2 days ago</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="topnav-dropdown-footer">
                    <a href="notifications.html">View all Notifications</a>
                </div>
            </div>
        </li>
        <li class="nav-item  has-arrow dropdown-heads ">
            <a href="javascript:void(0);" class="win-maximize">
                <i class="fe fe-maximize"></i>
            </a>
        </li>

        <!-- Authentication Links -->
        @guest
            @if (Route::has('login'))
                <li class="nav-item has-arrow">
                    <a class="nav-link fw-medium" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item has-arrow">
                    <a class="nav-link fw-medium" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <!-- User Menu -->
            <li class="nav-item dropdown">
                <a href="javascript:void(0)" class="user-link  nav-link" data-bs-toggle="dropdown">
                    <span class="user-content">
                        <span class="user-details">Author</span>
                        <span class="user-name">{{ Auth::user()->name }}</span>
                    </span>
                </a>
                <div class="dropdown-menu menu-drop-user">
                    <div class="profilemenu">
                        <div class="subscription-menu">
                            <ul>
                                <li>
                                    <a class="dropdown-item" href="#">Profile</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Settings</a>
                                </li>
                            </ul>
                        </div>
                        <div class="subscription-logout">
                            <ul>
                                <li class="pb-0">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <!-- /User Menu -->
        @endguest

    </ul>

    <!-- /Header Menu -->

</div>
