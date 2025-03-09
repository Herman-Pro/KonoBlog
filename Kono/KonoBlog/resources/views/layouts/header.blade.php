<header>
  <nav class="nav-container">
    <div class="nav-link-container">
      <img src="{{ asset('img/logo-removebg-preview.png') }}" alt="logo_de_KonoBlog">
      <ul>
        <li><a href="{{ route('home') }}" title="Accueil" class="{{ request()->routeIs('home') ? 'active' : '' }}">Accueil</a></li>
        <li><a href="{{ route('categorie') }}" title="Catégorie" class="{{ request()->routeIs('categorie') ? 'active' : '' }}">Catégorie</a></li>
        <li><a href="{{ route('about.us') }}" title="À propos" class="{{ request()->routeIs('about.us') ? 'active' : '' }}">À propos</a></li>
        <li><a href="{{ route('contact') }}" title="Contact" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
      </ul>
    </div>
    <div class="nav-search-container">
      <div class="search-container">
        <input type="search">
        <button type="submit"><i class="fi fi-rr-search icon"></i></button>
      </div>
      <i class="fi fi-brands-telegram icon-telegram"></i>
    </div>
  </nav>
  @yield('banniere')
</header>