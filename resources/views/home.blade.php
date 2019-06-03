@extends('layouts.main')
@section('content')
  <!-- Banner -->
  <section class="banner full">

      @foreach($gallery as $key => $gallery_item)
        <article>
          <img src="/storage/{{$gallery_item['picture']}}" alt="" />
          <div class="inner">
            <header>
          <!--  <div class="logo"><img src="logotips.png"  style="width:300px;">  <p>Mīlulis</p>  <!-- pirmais slaids -->
            <!--  <h2>Gaišas un plašas telpas</h2> <!-- pirmais slaids -->
            </header>
          </div>
        </article>
      @endforeach
  </section>
  <!-- One -->
  <section id="one" class="wrapper style2">
    <div class="inner">
      <div class="grid-style">
        <div>
          <div class="box">
            <div class="image fit">
              <img src="/storage/pic002.jpg" alt="" />
            </div>
            <div class="content">
              <header class="align-center">
                <p>Mīlulis</p> <!-- AUGŠPUSĒ - Teksts zem PIRMĀS bildes -->
                <h2 >Īsumā par mums</h2> <!-- ZEMĀK - Teksts zem PIRMĀS bildes -->
              </header>
              <p class="content-paragraph">Pirmskolas  izglītības iestāde dibināta kā 2 grupu bērnudārzs ar 25 vietām, kas šobrīd pārtapis par 4 grupu bērnudārzu ar 75 vietām. Izklītības iestāde atrodas mikrorajonā Jugla, Rīgā, kur ir labi sakarota infrastruktūra, blakus skolām, sporta zālēm, baseinam u.c. Iestādē ir gaišas un plašas telpas, pārredzams un labiekārtots rotaļlaukums un ir slēgta teitorija priekš drošības.</p> <!-- VĒL ZEMĀK - Teksts zem PIRMĀS bildes -->
              <footer class="align-center">
                <a href="{{route('about')}}" class="button alt">Uzzināt vairāk</a> <!-- Poga zem PIRMĀS bildes, mby jāizņēm -->
              </footer>
            </div>
          </div>
        </div>
        <div>
          <div class="box">
            <div class="image fit">
              <img src="/storage/pic003.jpg" alt="" />
            </div>
            <div class="content">
              <header class="align-center">
                <p>Mīlulis</p> <!-- AUGŠPUSĒ - Teksts zem OTRĀS bildes -->
                <h2>Kādēļ izvēlēties šo bērnudārzu?</h2> <!-- ZEMĀK - Teksts zem OTRĀS bildes -->
              </header>
              <p class="content-paragraph">Pirmskolas izglītības iestāde ‘‘ Mīlulis’’ ir pirmskola kurā tiek nodrošināta gan aizraujoša rotaļnodarbību programma, gan mīlestības pilna un gadīga vide, kurā augstu vērtēta tiek katra bērna personība, veicināta pozitīva pašapziņa un uz savstarpēju cieņu balstīta sadarbība. Labākais izglītības plāns, jautras izklaides un vēl daudz citas aktivitātes, kuras attīsta.</p> <!-- VĒL ZEMĀK - Teksts zem OTRĀS bildes --> </p>
              <footer class="align-center">
                <a href="{{route('timetable')}}" class="button alt">Apskatīt dienas grafiku</a> <!-- Poga zem OTRĀS bildes, mby jāizņēm -->
              </footer>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- Two -->
  <section id="two" class="wrapper style3">
    <div class="inner">
      <header class="align-center">
        <h2 class="banner-text">Kontaktējies ar mums, ja ir kādas neskaidrības!</h2> <!-- Strādā, ja ar pelīti brauc lejā-->
      </header>
    </div>
  </section>
@endsection
