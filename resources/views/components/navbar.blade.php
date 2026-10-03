<nav class="custom-navbar">
    <div class="nav-container">
        <a href="{{ url('/user') }}" class="nav-brand"></a>

        <div class="nav-links">
            <a href="{{ url('/user') }}" class="nav-link {{ request()->is('user') ? 'active' : '' }}">
                Daftar Pengguna
            </a>
            <a href="{{ route('user.create') }}" class="nav-link btn-nav {{ request()->is('user/create') ? 'active' : '' }}">
                + Tambah Data
            </a>
        </div>
    </div>
</nav>

<style>
    .custom-navbar {
        background: #ffffff;
        border-bottom: 1px solid #e2e8f0;
        position: sticky;
        top: 0;
        z-index: 100;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
    }
    .nav-container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 14px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .nav-brand {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 18px;
        font-weight: 700;
        color: #1e293b;
        text-decoration: none;
    }
    .nav-brand svg {
        color: #2563eb;
    }
    .nav-links {
        display: flex;
        align-items: center;
        gap: 15px;
    }
    .nav-link {
        font-size: 14px;
        font-weight: 600;
        color: #64748b;
        text-decoration: none;
        padding: 8px 14px;
        border-radius: 8px;
        transition: 0.2s ease;
    }
    .nav-link:hover {
        color: #2563eb;
        background: #f1f5f9;
    }
    .nav-link.active {
        color: #2563eb;
    }
    .btn-nav {
        background: #2563eb;
        color: #ffffff !important;
    }
    .btn-nav:hover {
        background: #1d4ed8 !important;
    }
</style>