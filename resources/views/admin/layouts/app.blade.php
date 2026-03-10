<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin CMS — @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background: #f4f6f9; }
        .sidebar {
            width: 250px; min-height: 100vh;
            background: #1a1a2e; position: fixed;
            top: 0; left: 0; z-index: 100;
        }
        .sidebar .brand {
            padding: 20px;
            color: #fff;
            font-size: 1.2rem;
            font-weight: 700;
            border-bottom: 1px solid #ffffff20;
        }
        .sidebar .nav-link {
            color: #ffffffaa;
            padding: 12px 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.2s;
        }
        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            color: #fff;
            background: #ffffff15;
            border-left: 3px solid #6c63ff;
        }
        .main-content {
            margin-left: 250px;
            padding: 30px;
        }
        .topbar {
            background: #fff;
            padding: 15px 30px;
            margin-left: 250px;
            border-bottom: 1px solid #e0e0e0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 99;
        }
        .card { border: none; border-radius: 12px; box-shadow: 0 2px 10px rgba(0,0,0,0.07); }
        .btn-primary { background: #6c63ff; border-color: #6c63ff; }
        .btn-primary:hover { background: #5a52d5; border-color: #5a52d5; }
    </style>
</head>
<body>

{{-- Sidebar --}}
<div class="sidebar">
    <div class="brand">
        <i class="bi bi-tools"></i> Repair CMS
    </div>
    <nav class="mt-3">
        <a href="{{ route('admin.dashboard') }}" 
           class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <i class="bi bi-speedometer2"></i> Dashboard
        </a>
        <a href="{{ route('admin.pages.index') }}" 
           class="nav-link {{ request()->routeIs('admin.pages.*') ? 'active' : '' }}">
            <i class="bi bi-file-earmark-text"></i> Pages
        </a>
        <a href="{{ route('admin.posts.index') }}" 
           class="nav-link {{ request()->routeIs('admin.posts.*') ? 'active' : '' }}">
            <i class="bi bi-journal-richtext"></i> Blog Posts
        </a>
        <a href="{{ route('admin.seo.index') }}" 
           class="nav-link {{ request()->routeIs('admin.seo.*') ? 'active' : '' }}">
            <i class="bi bi-search"></i> SEO Settings
        </a>
    </nav>
</div>

{{-- Top Bar --}}
<div class="topbar">
    <h6 class="mb-0 fw-semibold">@yield('title')</h6>
    <div class="dropdown">
        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">
            <i class="bi bi-person-circle"></i> {{ auth()->user()->name }}
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="dropdown-item text-danger" type="submit">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>
</div>

{{-- Main Content --}}
<div class="main-content">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@yield('scripts')
</body>
</html>