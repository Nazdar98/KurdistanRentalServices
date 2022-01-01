<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('title') - Kurdistan Rental Services</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link href="/css/admin-styles.css" rel="stylesheet" />

</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="/dashboard">Kurdistan Rental Services</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!" style="margin-left:50px"><i class="fas fa-bars"></i></button>
        <div class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></div>
        <!-- Navbar Search-->
        <!-- <form class=" d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
            </form> -->
        <!-- Navbar-->
        <div class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            @if (Route::has('login'))
            @auth
            <a class="" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: white;text-decoration: none;font-weight: bold;">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            @endauth
            @endif
        </div>
        <!-- <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul> -->
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">

                        <a href="/dashboard" class="nav-link">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>

                        <a href="/bookings" class="nav-link">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Bookings
                        </a>

                        <a href="/rentals-admin" class="nav-link">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Rentals
                        </a>

                        <a href="/add-rental" class="nav-link">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Add Rentals
                        </a>

                        <a href="/customers" class="nav-link">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Customers
                        </a>

                        <a href="/customers-bookings" class="nav-link">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Customers & Bookings
                        </a>

                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content" style="height:40vh;">
            @yield('content')
            <footer class=" py-4 bg-light mt-auto">
                <div class="px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">
                            <p>&copy; <?php echo date("Y"); ?> <a href="/"> - Kurdistan Rental Services</a></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script type="text/javascript" src="/js/jquery.1.11.1.js"></script>
    <script type="text/javascript" src="/js/bootstrap.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> -->
    <script src="/js/admin-scripts.js"></script>
</body>

</html>