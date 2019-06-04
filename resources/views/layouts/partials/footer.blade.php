<!-- Footer -->
<footer id="footer">
  </br>
    <div class="box1">
      <div class="footer-nav">
        <ul class="footer-bar">
          <li class="bar-btn"><a class="active" href="{{secure_asset(route('home'))}}">Sākums</a></li>
          <li class="bar-btn"><a href="{{secure_asset(route('about'))}}">Par Mums</a></li>
          <li class="bar-btn"><a href="{{secure_asset(route('timetable'))}}">Laika Grafiks</a></li>
          <li class="bar-btn"><a href="{{secure_asset(route('contact'))}}">Kontakti</a></li>
          <li class="bar-btn"><a href="https://www.facebook.com" target="_blank">Facebook</a></li>
        </ul>
      </div>
    </div>
  </br>
  <div class="copyright">
    &copy; Pirmskolas izglitibas iestāde Milulis. Visas tiesības aizsargātas.
  </div>
</footer>

<!-- Scripts -->
<script src="{{ secure_asset('js/app.js') }}"></script>
<script src="{{ secure_asset('js/jquery.min.js') }}"></script>
<script src="{{ secure_asset('js/scrollex.min.js') }}"></script>
<script src="{{ secure_asset('js/skel.min.js') }}"></script>
<script src="{{ secure_asset('js/util.js') }}"></script>
<script src="{{ secure_asset('js/main.js') }}"></script>
