<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Informasi Siswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f3f4f6;
        }
        .sidebar {
            width: 240px;
            min-height: 100vh;
            background: linear-gradient(180deg, #2563eb, #1d4ed8);
            color: #fff;
        }
        .sidebar .brand {
            font-weight: 700;
            letter-spacing: .03em;
        }
        .sidebar a {
            color: #e5e7eb;
            text-decoration: none;
        }
        .sidebar a.active,
        .sidebar a:hover {
            background-color: rgba(15, 23, 42, 0.25);
            color: #fff;
        }
        .topbar {
            background: #ffffff;
            box-shadow: 0 1px 4px rgba(15, 23, 42, 0.08);
            z-index: 10;
        }
        .page-title {
            font-weight: 600;
        }
    </style>
</head>
<body>
<div class="d-flex">
    {{-- SIDEBAR --}}
    <aside class="sidebar d-flex flex-column p-3">
        <div class="mb-4">
            <div class="brand h5 mb-0">Sistem Informasi Siswa</div>
            <small class="text-light">Dashboard Akademik</small>
        </div>

        <nav class="nav nav-pills flex-column gap-1">
            <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
               href="{{ route('dashboard') }}">
                🏠 Dashboard
            </a>
            <a class="nav-link {{ request()->routeIs('siswa.*') ? 'active' : '' }}"
               href="{{ route('siswa.index') }}">
                🎓 Data Siswa
            </a>
            <a class="nav-link {{ request()->routeIs('profile') ? 'active' : '' }}"
               href="{{ route('profile') }}">
                🙍 Profil
            </a>
        </nav>

        <div class="mt-auto pt-3 border-top border-light-subtle">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-sm btn-light w-100">
                    Keluar
                </button>
            </form>
        </div>
    </aside>

    {{-- MAIN CONTENT --}}
    <div class="flex-grow-1 d-flex flex-column">
        {{-- TOPBAR --}}
        <header class="topbar px-4 py-3 d-flex justify-content-between align-items-center">
            <div class="page-title">
                @yield('page_title', 'Dashboard')
            </div>
            <div class="d-flex align-items-center gap-3">
                <span class="text-muted small">
                    {{ auth()->user()->name ?? 'User' }}
                </span>
            </div>
        </header>

        {{-- CONTENT --}}
        <main class="p-4">
            @yield('content')
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
