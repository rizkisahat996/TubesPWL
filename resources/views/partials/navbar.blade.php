<nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ Request::is('index') ? 'active' : '' }}" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('posts') ? 'active' : '' }}" href="/posts">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('categories') ? 'active' : '' }}" href="/categories">Categories</a>
              </li>
            </ul>

            <ul class="navbar-nav ms-auto">
              @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome back, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-window"></i> My Dashboard</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="/logout" method="post">
                      @csrf
                      <button type="submit" class="dropdown-item"><i class="bi bi-door-closed"></i> Logout</a></button>
                    </form>
                </ul>
              </li>
              @else
              <li class="nav-item">
                <a href="/" class="nav-link"><i class="bi bi-arrow-right"></i>Masuk</a>
              </li>
              @endauth
            </ul>
            
          </div>
        </div>
      </nav>