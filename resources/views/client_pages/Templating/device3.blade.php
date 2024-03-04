@extends('client_pages.Layout.index')
@section('content')
@include('client_pages.Templating.header_device')

<!-- ***** Main Banner Area Start ***** -->
    <!-- ***** Monitoring ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Telemetering Device 3</h2>
                        <img src="{{asset('client_side/assets/')}}/images/line-dec.png" alt="waves">
                        <p>Device 3 berada di lokasi dekat mushola. Berikut ini adalah cuplikan data dari sensor-sensor yang telah terpasang, klik "Lihat Grafik" untuk melihat detail grafik berdasarkan perubahan waktu</p>
                        <img src="{{asset('client_side/assets/')}}/images/TELE3.jpg" width="400" height="500">
                        <br>
                        <div class="container-fluid" >
                            <div class="row justify-content-center">
                              <div class="col-20">
                                <div class="card">
                                  <div class="card-header">
                                    <h5 class="card-title">Data Sensor Kualitas Udara</h5>
                                  </div>
                                  <div class="card-body">
                                    <ul>
                                        <li>Data pada sensor-sensor diambil pada </li> 
                                        <li>28-12-2021 12:00</li>
                                    </ul>
                                    <br>
                                    <ul>
                                        <li>CO:</li>
                                        <li>O3:</li>
                                        <li>H2S:</li>
                                        <li>Dust:</li>
                                        <li>NH3:</li>
                                        <li>NO2:</li>
                                    </ul>

                                </div>
                                 </div>
                            </div>
                        </div>
                        </div>
                        <br>
                        <div class="container-fluid" >
                            <div class="row justify-content-center">
                              <div class="col-20">
                                <div class="card">
                                  <div class="card-header">
                                    <h5 class="card-title">Data Sensor Cuaca</h5>
                                  </div>
                                  <div class="card-body">
                                    <ul>
                                        <li>Data pada sensor-sensor diambil pada </li> 
                                        <li>28-12-2021 12:00</li>
                                    </ul>
                                    <br>
                                    <ul>
                                        <li>Temperature:</li>
                                        <li>Humidity:</li>
                                        <li>Pressure:</li>
                                        <li>Rain:</li>
                                    </ul>

                                </div>
                                 </div>
                            </div>
                        </div>
                        </div>
                        <br>
                        <div class="container-fluid" >
                            <div class="row justify-content-center">
                              <div class="col-20">
                                <div class="card">
                                  <div class="card-header">
                                    <h5 class="card-title">Data Sensor Kecepatan dan Arah Angin</h5>
                                  </div>
                                  <div class="card-body">
                                    <ul>
                                        <li>Data pada sensor-sensor diambil pada </li> 
                                        <li>28-12-2021 12:00</li>
                                    </ul>
                                    <br>
                                    <ul>
                                        <li>Wind Speed:</li>
                                        <li>Wind Direction:</li>
                                    </ul>
                                </div>
                                 </div>
                            </div>
                        </div>
                        </div>
                    
                    </div>
                </div>
                
          
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->
@endsection