<!DOCTYPE html>
<html lang="en">

<head>
    <title>Point System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <div class="container py-5 text-center">
        @auth
            <div class="user-wrapper d-flex bg-white shadow justify-content-between align-items-center position-fixed top-0 start-0 w-100 px-4 py-2"
                style="z-index: 99;">
                <a href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#demo" class="fs-2 text-warning">
                    <i class="bi bi-list"></i>
                </a>
                @if (auth()->user()->role == 'admin')
                    <h4 class="mb-0">Admin Dashboard</h4>
                @else
                    <h4 class="mb-0">Dashboard</h4>
                @endif
                <div class="dropdown">
                    <a href="javascript:void(0);" class="text-decoration-none fs-2 text-warning dropdown-toggle"
                        data-bs-toggle="dropdown">
                        <i class="bi bi-person-circle"></i>
                    </a>
                    <ul class="dropdown-menu border-0 shadow" style="z-index: 9999">
                        <li><a class="dropdown-item text-muted" href="{{ route('editprofile.index') }}">My Profile</a></li>
                        <li><a class="dropdown-item text-muted" href="{{ route('editpassword.index') }}">Change Password</a></li>
                        <hr>
                        <li><a class="dropdown-item text-muted text-danger"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit()"
                                href="#">Sign Out</a></li>
                        <form action="{{ route('logout') }}" method="POST" id="logout-form">
                            @csrf
                        </form>
                    </ul>
                </div>
            </div>
        @endauth
        @yield('content')
        @auth
            <div class="logout-wrapper position-fixed bottom-0 start-0 w-100 pb-2">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-lg btn-warning px-5 text-white">Sign Out</button>
                </form>
            </div>
        @endauth
    </div>

    @include('inc.alert')

    @auth
        <div class="offcanvas offcanvas-start" id="demo">
            <div class="offcanvas-header">
                <img src="{{ asset('logo-vr.png') }}" alt="Logo" width="100">
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav">
                    @if (auth()->user()->role == 'admin')
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="{{ route('admin.dashboard.index') }}">
                                <i class="bi bi-grid"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="{{ route('admin.dashboard.index') }}">
                                <i class="bi bi-people"></i>
                                All Users
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="{{ route('admin.point.add') }}">
                                <i class="bi bi-plus-circle"></i>
                                Add Points
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="{{ route('admin.point.charge') }}">
                                <i class="bi bi-dash-circle"></i>
                                Charge Points
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="{{ route('admin.point.index') }}">
                                <i class="bi bi-file-earmark"></i>
                                All Transactions
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="{{ route('user.dashboard.index') }}">
                                <i class="bi bi-grid"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="{{ route('user.point.index') }}">
                                <i class="bi bi-file-earmark"></i>
                                All Transactions
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    @endauth
</body>

</html>
