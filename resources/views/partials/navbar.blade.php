<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.html">Welcome to School Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item {{ Request::is('index') ? 'active' : '' }}"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/dashboard">Back To Dashboard</a></li>
                    <li class="nav-item {{ Request::is('posts') ? 'active' : '' }}"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/posts">Blog Berita</a></li>
                    <li class="nav-item {{ Request::is('categories') ? 'active' : '' }}"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/categories">Categories</a></li>
                </ul>
            </div>
        </div>
</nav>