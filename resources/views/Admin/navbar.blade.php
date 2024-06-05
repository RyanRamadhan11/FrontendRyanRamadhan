<nav class="sb-topnav navbar navbar-expand " style="background-color: #37517e; color:white">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" style="background-color: #37517e; color:white" href="index.html">Frontend RR</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" style="color:white" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" style=" color:white">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <button class="btn btn-secondary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="d-flex align-items-center navbar-nav ms-auto ms-md-3 me-3 me-lg-4">

            <li class="nav-item dropdown ms-md-3">

                <a class="nav-link nav-profile d-flex align-items-center " style="color:white" href="#" data-bs-toggle="dropdown">
                    <span class="d-none d-md-block dropdown-toggle ps-2">
                    @if(empty(Auth::user()->name))
                    {{ '' }}
                    @else
                    {{ Auth::user()->name }}
                    @endif
                    </span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6> {{ Auth::user()->name }} </h6>
                        <span>{{ Auth::user()->role }}</span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ url('myprofil') }}">
                            <i class="bi bi-person" style="margin-right: 10px;"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    @if(Auth::user()->role == 'Admin')
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ url('kelola_user') }}">
                            <i class="bi bi-gear" style="margin-right: 10px;"></i>
                            <span>Kelola User</span>
                        </a>
                    </li>
                    @endif

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="bi bi-box-arrow-right" style="margin-right: 10px;"></i> {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
</nav>