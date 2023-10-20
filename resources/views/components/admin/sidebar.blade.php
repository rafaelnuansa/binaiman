<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{ route('admin.dashboard.index') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('logo.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('logo.png') }}" alt="" height="45">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{ route('admin.dashboard.index') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('logo.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('logo.png') }}" alt="" height="45">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>
    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard.index') }}" class="nav-link menu-link"><i
                            class='bx bx-home-alt'></i><span>Dashboard</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarLanding" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarLanding">
                        <i class="bx bx-book-content"></i> <span data-key="t-landing">Postingan</span>
                    </a>
                    <div class="menu-dropdown collapse" id="sidebarLanding" style="">
                        <ul class="nav nav-sm flex-column">

                            @if (auth()->user()->hasRole('Admin|Kecamatan'))
                                <li class="nav-item">
                                    <a href="{{ route('admin.categories.index') }}" class="nav-link">Categories</a>
                                </li>
                            @endif

                            <li class="nav-item">
                                <a href="{{ route('admin.posts.index') }}" class="nav-link">Posts</a>
                            </li>
                        </ul>
                    </div>
                </li>




                <li class="nav-item">
                    <a href="{{ route('admin.photos.index') }}" class="nav-link menu-link"><i
                            class='bx bx-images'></i><span>Gallery</span> </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.pages.index') }}" class="nav-link menu-link"><i
                            class='bx bx-images'></i><span>Pages</span> </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.photos.index') }}" class="nav-link menu-link"><i
                            class='bx bx-images'></i><span>About</span> </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('admin.photos.index') }}" class="nav-link menu-link"><i
                            class='bx bx-images'></i><span>Contact</span> </a>
                </li>

                <li class="nav-item">
                <a href="{{ route('admin.users.index') }}" class="nav-link menu-link"><i
                            class='bx bx-user'></i><span>Pengguna</span> </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
