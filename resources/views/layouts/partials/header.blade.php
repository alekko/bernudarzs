<!-- Header -->
<header id="header" class="{{ Route::currentRouteName() == 'home' ? 'alt' : '' }}">
  <a href="{{secure_asset( route('home') ) }}">
    <div class="logo">
      <img src="/logotips.png" alt="logo" style="width:60px; margin-top: 10px;">
    </a></div>
  <a href="#menu">Izvelne</a>
</header>

<!-- Nav -->
<nav id="menu">
  <ul class="links">
    <li><a href="{{secure_asset( route('home') ) }}">Sākums</a></li> <!-- 1 -->
    <li><a href="{{secure_asset( route('about') ) }}">Par Mums</a></li> <!-- 2 -->
    <li><a href="{{secure_asset( route('timetable') ) }}">Laika grafiks</a></li> <!-- 3 -->
    <li><a href="{{secure_asset( route('contact') ) }}">Kontakti</a></li> <!-- 4 -->
    <li><a href="https://www.facebook.com" target="_blank">Facebook</a></li>
  </ul>
</nav>
