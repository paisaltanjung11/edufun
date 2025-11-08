<style>
  .modern-navbar {
    background: rgba(10, 14, 58, 0.85) !important;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    box-shadow: 0 4px 24px rgba(0, 0, 0, 0.2);
    padding: 12px 0;
    position: sticky;
    top: 0;
    z-index: 1000;
    will-change: transform;
    transform: translateZ(0);
  }

  .modern-navbar .navbar-brand img {
    filter: brightness(1.1);
    transition: transform 0.3s ease;
    will-change: transform;
    transform: translateZ(0);
  }

  .modern-navbar .navbar-brand img:hover {
    transform: scale(1.05) translateZ(0);
  }

  .modern-navbar .nav-link {
    color: rgba(255, 255, 255, 0.9) !important;
    font-weight: 500;
    font-size: 1rem;
    padding: 8px 16px !important;
    border-radius: 8px;
    transition: background-color 0.3s ease, color 0.3s ease;
    position: relative;
    will-change: background-color;
  }

  .modern-navbar .nav-link::after {
    content: '';
    position: absolute;
    bottom: 4px;
    left: 50%;
    transform: translateX(-50%) scaleX(0) translateZ(0);
    width: 60%;
    height: 2px;
    background: linear-gradient(90deg, transparent, rgba(100, 150, 255, 0.8), transparent);
    box-shadow: 0 0 8px rgba(100, 150, 255, 0.6);
    transition: transform 0.3s ease;
    will-change: transform;
  }

  .modern-navbar .nav-link:hover,
  .modern-navbar .nav-link.active {
    color: #ffffff !important;
    background: rgba(255, 255, 255, 0.1);
  }

  .modern-navbar .nav-link:hover::after,
  .modern-navbar .nav-link.active::after {
    transform: translateX(-50%) scaleX(1) translateZ(0);
  }

  .modern-navbar .navbar-toggler {
    border: 1px solid rgba(255, 255, 255, 0.2);
    background: rgba(255, 255, 255, 0.1);
  }

  .modern-navbar .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.9%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
  }

  @media (max-width: 991px) {
    .modern-navbar .navbar-collapse {
      background: rgba(10, 14, 58, 0.95);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border-radius: 12px;
      margin-top: 12px;
      padding: 16px;
      border: 1px solid rgba(255, 255, 255, 0.1);
    }
  }
</style>

<nav class="navbar navbar-expand-lg modern-navbar">
  <div class="container">
    <a class="navbar-brand" href="{{route('home.view')}}">
      <img class="col-1" src="{{asset('images\Logo.png')}}" alt="Logo" style="max-height: 40px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="gap-2 navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('home.view') ? 'active' : '' }}" aria-current="page"
            href="{{route('home.view')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('categories.view') ? 'active' : '' }}"
            href="{{route('categories.view')}}">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('writer.view') ? 'active' : '' }}"
            href="{{route('writer.view')}}">Writers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('aboutus.view') ? 'active' : '' }}"
            href="{{route('aboutus.view')}}">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('popular.view') ? 'active' : '' }}"
            href="{{route('popular.view')}}">Popular</a>
        </li>
      </ul>
    </div>
  </div>
</nav>