<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
        <a href="/admin/home" class="logo d-flex align-items-center">
            <span class="d-none d-lg-block">Ngampus</span>
        </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <!-- End Logo -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li>
    <!-- End Search Icon-->

            <li class="nav-item dropdown">
                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-bell"></i>
                    <span style="background-color:#09D2DD"class="badge badge-number">4</span>
                </a>
            <!-- End Notification Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
                You have 4 new notifications
                <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>

                    </ul>
                    <!-- End Notification Dropdown Items -->

                </li>
                <!-- End Notification Nav -->

                

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="{{asset('Admin/img/profile-admin.jpg')}}" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
                    </a>
                    <!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">


                        <li>
                            <a class="mb-2 dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">

                                <i class="bi bi-box-arrow-right"></i>
                                <span>{{ __('Logout') }}</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            </a>
                        </li>

                    </ul>
                    <!-- End Profile Dropdown Items -->
                </li>
                <!-- End Profile Nav -->

            </ul>
        </nav>
        <!-- End Icons Navigation -->

    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link @yield('home')" href="/admin/home">
                    <i class="bi bi-grid"></i>
                    <span>Beranda</span>
                </a>
            </li>
            <!-- End Dashboard Nav -->

            <!-- <li class="nav-heading">Pages</li> -->

            <li class="nav-item">
                <a class="nav-link @yield('manajemenuser')" href="/admin/user">
                    <i class="bi bi-people"></i>
                    <span>Manajemen Akun</span>
                </a>
            </li>
            <!-- End Profile Page Nav -->


            
            <li class="nav-item ">
                <a class="nav-link @yield('manajemenproduk')" href="/admin/produk">
                    <i class="bi bi-journal-text"></i>
                    <span>Manajemen Produk</span>
                </a>
            </li>
            <!-- End F.A.Q Page Nav -->

            <li class="nav-item">
                <a class="nav-link @yield('approvalkegiatan')" href="/admin/approval">
                    <i class="bi bi-card-list"></i>
                    <span>Approval Kegiatan</span>
                </a>
            </li>
            <!-- End Register Page Nav -->

            <li class="nav-item">
                <a class="nav-link @yield('jurusan')" href="/admin/jurusan">
                    <i class="bi bi-book"></i>
                    <span>Jurusan</span>
                </a>
            </li>
            <!-- End Contact Page Nav -->

            <li class="nav-item">
                <a class="nav-link @yield('kampus')" href="{{ route('admin.kampus.index') }}">
                    <i class="bi bi-mortarboard"></i>
                    <span>Kampus</span>
                </a>
            </li>
            <!-- End Login Page Nav -->

            <li class="nav-item">
                <a class="nav-link @yield('testimoniproduk')" href="/admin/testimoni/produk">
                    <i class="bi bi-chat-square-dots"></i>
                    <span>Testimoni Produk</span>
                </a>
            </li>
            <!-- End Login Page Nav -->

            <li class="nav-item">
                <a class="nav-link @yield('faq')" href="/admin/faq">
                    <i class="bi bi-question-octagon"></i>
                    <span>FAQ Ngampus</span>
                </a>
            </li>
            <!-- End Login Page Nav -->

            <li class="nav-item">
                <a class="nav-link @yield('master')" href="/admin/master">
                    <i class="bi bi-question-octagon"></i>
                    <span>Master Ngampus</span>
                </a>
            </li>
            <!-- End Login Page Nav -->
        </ul>
    </aside>
<!-- End Sidebar-->