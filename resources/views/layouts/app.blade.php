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
        <div class="overflow-hidden">
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
                                            <li class="active"><a href="/">Home</a></li>
                                            <li><a href="#">Event</a>
                                                <ul class="dropdown">
                                                    <li><a href="index.html">- RIZIN</a></li>
                                                    <li><a href="archive-list.html">- K-1</a></li>
                                                    <li><a href="archive-grid.html">- UFC</a></li>
                                                    <li><a href="single-post.html">- DEEP</a></li>
                                                    <li><a href="video-post.html">- ONE</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Pages</a>
                                                <ul class="dropdown">
                                                    <li><a href="index.html">- Home</a></li>
                                                    <li><a href="archive-list.html">- Archive List</a></li>
                                                    <li><a href="archive-grid.html">- Archive Grid</a></li>
                                                    <li><a href="single-post.html">- Single Post</a></li>
                                                    <li><a href="video-post.html">- Single Video Post</a></li>
                                                    <li><a href="contact.html">- Contact</a></li>
                                                    <li><a href="typography.html">- Typography</a></li>
                                                    <li><a href="login.html">- Login</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="#">user</a>
                                                <ul class="dropdown">
                                                    @if (Auth::check())
                                                        <li><a href="#" class="pointer-events-none" style="color: gray;">{{ Auth::user()->name }} さん</a></li>
                                                        <li>
                                                            <form method="POST" action="{{ route('logout') }}">
                                                                @csrf
                                                                <a
                                                                    href="{{ route('logout') }}"
                                                                    onclick="event.preventDefault();
                                                                                    this.closest('form').submit();"
                                                                >{{ __('Log Out') }}</a>
                                                            </form>
                                                        </li>
                                                    @else
                                                        <li><a href="{{ route('login') }}">- Login</a></li>
                                                        <li><a href="{{ route('register') }}">- Register</a></li>
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
</html>
