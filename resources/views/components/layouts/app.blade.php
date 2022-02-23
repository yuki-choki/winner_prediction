<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/vizew-master.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/plugin/jquery-2.2.4.min.js') }}" defer></script>
        <script src="{{ asset('js/plugin/popper.min.js') }}" defer></script>
        <script src="{{ asset('js/plugin/plugins.js') }}" defer></script>
        <script src="{{ asset('js/plugin/active.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div>
            <!-- Preloader -->
            <div class="preloader flex items-center justify-content-center">
                <div class="lds-ellipsis">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <!-- Page Heading -->
            <header class="header-area">
                <!-- Navbar Area -->
                <div class="vizew-main-menu" id="sticker">
                    <div class="classy-nav-container breakpoint-off">
                        <div class="container m-auto">
                            <!-- Menu -->
                            <nav class="classy-navbar justify-between" id="vizewNav">
                                <!-- Nav brand -->
                                <a href="/" class="nav-brand">
                                    <h6>WIN-PRE</h6>
                                </a>
                                <!-- Navbar Toggler -->
                                <div class="classy-navbar-toggler">
                                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                                </div>
                                <div class="classy-menu">
                                    <!-- Close Button -->
                                    <div class="classycloseIcon">
                                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                                    </div>
                                    <!-- Nav Start -->
                                    <div class="classynav">
                                        <ul>
                                            <li class="{{ \Request::path() === '/' ? 'active' : '' }}"><a href="/">Home</a></li>
                                            <li><a href="#">Event</a>
                                                <ul class="dropdown">
                                                    @foreach (App\Models\Group::all() as $group)
                                                        <li><a href="{{ route('group.show', ['group' => $group->id]) }}">{{ $group->name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li><a href="#">user</a>
                                                <ul class="dropdown">
                                                    @if (Auth::check())
                                                        <li><a href="#">MYPAGE</a></li>
                                                        <li>
                                                            <form method="POST" action="{{ route('logout') }}">
                                                                @csrf
                                                                <a
                                                                    href="{{ route('logout') }}"
                                                                    onclick="event.preventDefault();
                                                                                    this.closest('form').submit();"
                                                                >LOGOUT</a>
                                                            </form>
                                                        </li>
                                                    @else
                                                        <li><a href="{{ route('login') }}">LOGIN</a></li>
                                                        <li><a href="{{ route('register') }}">REGISTER</a></li>
                                                    @endif
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Nav End -->
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
    <footer class="footer-area">
        <div class="copywrite-area section-padding-80">
            <div class="container m-auto">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-6 text-center">
                        <ul class="flex justify-center mb-30 flex-wrap">
                            <li class="ml-30 mr-30 mb-15"><a href="#">Advertise</a></li>
                            <li class="ml-30 mr-30 mb-15"><a href="#">About</a></li>
                            <li class="ml-30 mr-30 mb-15"><a href="#">Contact</a></li>
                            <li class="ml-30 mr-30 mb-15"><a href="#">Disclaimer</a></li>
                            <li class="ml-30 mr-30 mb-15"><a href="#">Privacy</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 text-center">
                        <p class="copywrite-text">
                            &copy;<script>document.write(new Date().getFullYear());</script> Yuki Chouki
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</html>
