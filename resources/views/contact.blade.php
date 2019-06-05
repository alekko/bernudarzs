@extends('layouts.main')
@section('content')
@include('layouts.partials.page_header', ['content' => 'Kontakti'])
  <!-- Two -->
  <section id="two" class="wrapper style2">
    <div class="inner">
      <div class="box">
        <div class="content">
          <div class="row contact-block">
            <div class="col-xs-12 col-lg-6">
              <div class="contact-us-wrapper">
                <h2>
                  <p class="contact-us-paragraph"><i class="fa fa-home"></i>  Murjāņu iela 93, Rīga, LV-1024 Latvija </p>
                  <p class="contact-us-paragraph"><i class="fa fa-phone"></i> +371 29 177 268
                  <p class="contact-us-paragraph"><i class="fa fa-envelope"></i>
                    <a class="contact-us-paragraph-link" href="mailto:sintijagunta@piimilulis.com">sintijagunta@piimilulis.com</a>
                      vai
                    <a class="contact-us-paragraph-link" href="mailto:sintijaeglite@inbox.lv">sintijaeglite@inbox.lv</a>
                  </p>
                  <p class="contact-us-paragraph"><i class="fa fa-link"></i> <a class="contact-us-paragraph-link" href="https://www.facebook.com/ppiimilulis/" target="_blank">https://www.facebook.com/ppiimilulis/</a> </p>
                </h2>
              </div>
            </div>
            <div class="col-xs-12 col-lg-6">
              <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2174.225927194835!2d24.248803916405727!3d56.97919100420575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecc246c62e335%3A0x9b185ae07ad20ba5!2zTXVyasSBxYZ1IGllbGEgOTMsIFZpZHplbWVzIHByaWVrxaFwaWxzxJN0YSwgUsSrZ2EsIExWLTEwNjQ!5e0!3m2!1slv!2slv!4v1554709151830!5m2!1slv!2slv" width="1000" height="600" frameborder="0" style="border:0" allowfullscreen>
                </iframe>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>
@endsection
