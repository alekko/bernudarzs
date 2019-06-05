<!-- Header -->
<header id="header" class="{{ Route::currentRouteName() == 'home' ? 'alt' : '' }}">
  <a class="logo" href="{{route('home')}}">
    Pirmsskolas izglītības iestāde "Mīlulis"
  </a>
  <a href="#menu">Izvelne</a>
</header>
<!-- Nav -->
<nav id="menu">
  <ul class="links">
    <li><a href="{{route('home')}}">Sākums</a></li> <!-- 1 -->
    <li><a href="{{route('about')}}">Par Mums</a></li> <!-- 2 -->
    <li><a href="{{route('timetable')}}">Laika grafiks</a></li> <!-- 3 -->
    <li><a href="{{route('contact')}}">Kontakti</a></li> <!-- 4 -->
    <li><a href="https://www.facebook.com" target="_blank">Facebook</a></li>
  </ul>
</nav>
