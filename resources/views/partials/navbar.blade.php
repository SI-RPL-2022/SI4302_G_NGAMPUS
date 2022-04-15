<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center mb-5">
        <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <a href="/"><img src="{{asset('Logo/logo2.png')}}" alt="" style="100px" class="img-fluid"></a>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
            <li><a class="nav-link scrollto {{ ($title === "home" ? 'active' : '') }}" href="/">Beranda</a></li>
            <li><a class="nav-link scrollto {{ ($title === "about" ? 'active' : '') }}" href="/about">Produk Kami</a></li>
            <li><a class="nav-link scrollto {{ ($title === "artikel" ? 'active' : '') }}" href="/artikel">Artikel</a></li>
            <li><a class="nav-link scrollto {{ ($title === "portofolio" ? 'active' : '') }}" href="/portfolio">Portfolio</a></li>
            <li><a class="nav-link scrollto {{ ($title === "team" ? 'active' : '') }}" href="/team">Team</a></li>
            <li><a class="nav-link scrollto {{ ($title === "contact" ? 'active' : '') }}" href="/contact">Contact</a></li>
            <li><a class="getstarted scrollto" href="/">Login</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
