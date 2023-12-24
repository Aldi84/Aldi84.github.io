<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">Portofolio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($active ==="home") ? 'active': '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active ==="posts") ? 'active': '' }}" href="/posts">Posts</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ ($active ==="posts") ? 'active': '' }}" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            <ul class="dropdown-menu bg-dark">
              <li><a class="dropdown-item text-white" href="/posts?category=web-programing">Web Programing</a></li>
              <li><hr class="'dropdown-divider"></li>
              <li><a class="dropdown-item text-white" href="/posts?category=personal">Personal</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active ==="about") ? 'active': '' }}" href="/about">About</a>
          </li>
        </ul>
        
        <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            welcome back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-building-gear"></i> My Dashboard</a></li>
            <li><hr class="'dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf
              <button type="submit" class="dropdown-item"><i class="bi bi-person-down"></i> Logout</a>
              </button>
            </form>
            </li>
          </ul>
        </li>
        @else
{{-- cuma admin yang bisa akses login --}}
        {{-- @can('admin')       --}}
        <li class="nav-item">
          <a href="/login" class="nav-link"{{ ($active ==="login") ? 'active': '' }}> <i class="bi bi-person-up"></i> Login</a>
        </li>
        {{-- @endcan --}}

        @endauth
      </ul>
      </div>
    </div>
  </nav>