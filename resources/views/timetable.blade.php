@extends('layouts.main')
@section('content')
@include('layouts.partials.page_header', ['content' => 'Laika grafiks'])
  <!-- Main -->
  <div id="main" class="container">
    <!-- Elements -->
      <div style="width: 100%;">
        <div>
          <!-- Table -->
            <div class="inner">
              <div class="box">
                <div class="content">
                  <header class="align-center">
                    <p>Laika grafiks</p>
                  </header>
                </div>
              </div>
            </div>
            <div class="table-wrapper">
              <table class="alt">
                <thead>
                  <tr>
                    <th>Apraksts</th>
                    <th>Laiks</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Ierašanās bērnudārzā</td>
                    <td>7:00 - 9:00</td>
                  </tr>
                  <tr>
                    <td>Brokastis</td>
                    <td>9:00 - 9:30</td>
                  </tr>
                  <tr>
                    <td>Izglītojošie pasākumi</td>
                    <td>9:30 - 12:00</td>
                  </tr>
                  <tr>
                    <td>Pusdienas</td>
                    <td>12:00 - 13:00</td>
                  </tr>
                  <tr>
                    <td>Diendusa</td>
                    <td>13:00 - 15:30</td>
                  </tr>
                  <tr>
                    <td>Launags</td>
                    <td>15:30 - 16:00</td>
                  </tr>
                  <tr>
                    <td>Nodarbības un brīvās rotaļas</td>
                    <td>16:00 - 19:00</td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
          <div class="6u$ 12u$(medium)"> </div>
      </div>
  </div>
@endsection
