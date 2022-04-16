<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center mb-5">
        <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <a href="/"><img src="{{asset('Logo/logo2.png')}}" alt="" style="100px" class="img-fluid"></a>
        </div>

        <nav id="navbar" class="navbar">
            <ul>

            <li>
                <a class="nav-link @yield('beranda')" href="/">Beranda</a>
            </li>
            <li>
                <a class="nav-link @yield('produk')" href="/produk">Produk Kami</a>
            </li>
            <li>
                <a class="nav-link @yield('artikel')" href="/artikel">Artikel</a>
            </li>
            <li>
                <a class="nav-link @yield('team')" href="/team">Team</a>
            </li>
            <li>
                <a class="nav-link @yield('about')" href="/about">Tentang</a>
            </li>

            @guest
                <li>
                @if (Route::has('login'))
                <a class="getstarted scrollto" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                @endif

                @if (Route::has('register'))
                @endif
            
            @else
            <li class="nav-item dropdown nav-link scrollto">
                <a id="navbarDropdown" class="nav-link dropdown-toggle d-flex align-items-center"  role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a href="/profile/{{ Auth::user()->id }}" class="dropdown-item">Profile</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    </form>
                </div>
            </li>
            @endguest
            
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

