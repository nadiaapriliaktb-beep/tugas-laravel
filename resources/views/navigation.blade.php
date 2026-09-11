<nav style="padding: 10px; background-color: #f8f9fa; margin-bottom: 20px;">
    <!-- Link Dashboard -->
    <a href="{{ route('dashboard') }}" style="margin-right: 15px; text-decoration: none;">
        {{ __('Dashboard') }}
    </a>

    <!-- Link Mahasiswa -->
    <a href="{{ route('mahasiswa.index') }}" style="margin-right: 15px; text-decoration: none;">
        {{ __('Mahasiswa') }}
    </a>
</nav>