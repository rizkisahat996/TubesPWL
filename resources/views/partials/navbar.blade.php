<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="/">TABUNGAN SISWA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item {{ Request::is('index') ? 'active' : '' }}"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/dashboard">Back To Dashboard</a></li>
                    <li class="nav-item {{ Request::is('posts') ? 'active' : '' }}"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/posts">Blog Berita</a></li>
                    <li class="nav-item {{ Request::is('categories') ? 'active' : '' }}"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/categories">Categories</a></li>
                    @auth
                    <li class="nav-item {{ Request::is('transaksi') ? 'active' : '' }}"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/transfer">Transfer</a></li>
                    <li class="nav-item {{ Request::is('transaksi') ? 'active' : '' }}"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/nabung">Nabung</a></li>
                    <li class="nav-item {{ Request::is('transaksi') ? 'active' : '' }}"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/penarikan">Ambil Uang</a></li>
                    <li class="nav-item {{ Request::is('transaksi') ? 'active' : '' }}"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/transaksi">History Tabungan</a></li>
                    <li class="nav-item {{ Request::is('transaksi') ? 'active' : '' }}"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/ceksaldo">Cek Saldo</a></li>
                    @endauth
                </ul>
            </div>
        </div>
</nav>