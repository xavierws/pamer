<!doctype html>
<html lang="en">

<head>
    <title>PaMer</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}

    {{-- Optional CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"><strong>PaMer</strong></div>
            </div>
            {{-- <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div> --}}
            <div class="app-header__menu">
                <span>
                    <button type="button"
                        class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                {{-- Navbar --}}
                <div class="app-header-left">
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link">
                                HOME
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/kelas') }}" class="nav-link">
                                KELAS
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="{{ url('/login') }}" class="nav-link">
                        LOGIN
                        </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/register') }}" class="nav-link">
                                SIGN UP
                            </a>
                        </li> --}}
                    </ul>
                </div>
                {{-- Navbar end --}}

                {{-- User Account --}}
                <div class="app-header-right">
                    <ul class="header-menu nav">
                        @if (!session('login'))
                        <li class="nav-item">
                            <a href="{{ url('/login') }}" class="nav-link">
                                LOGIN
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/register') }}" class="nav-link" id="signup">
                                SIGN UP
                            </a>
                        </li>
                        @else
                        <li>
                            <div class="dropdown d-inline-block">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown"
                                    class="mb-2 mr-2 dropdown-toggle btn btn-outline-link"><strong>{{ Session::get('username') }}</strong></button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    @if (session('user_type')=='siswa')
                                    <a href="{{ action('DashboardController@siswa', Session::get('user_id')) }}"
                                        type="button" tabindex="0" class="dropdown-item">Dashboard</a>
                                    @else
                                    <a href="{{ action('DashboardController@pengajar', Session::get('user_id')) }}"
                                        type="button" tabindex="0" class="dropdown-item">Dashboard</a>
                                    @endif
                                    <a href="{{ url('logout') }}" type="button" tabindex="0"
                                        class="dropdown-item">Logout</a>
                                </div>
                            </div>
                        </li>
                        @endif
                    </ul>

                </div>
                {{-- User account end --}}
            </div>
        </div>
        <div class="app-main">
            <div class="app-main__outer">
                @yield('content')
                {{-- Footer --}}
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <div class="app-footer-left">
                                <h6>contact us</h6>
                            </div>
                            <div class="app-footer-right">
                                <p>copywrite</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Footer end --}}
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script> --}}
</body>

</html>
