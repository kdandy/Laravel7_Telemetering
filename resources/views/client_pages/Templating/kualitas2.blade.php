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
                        <h2>Telemetering Device 2 - Kualitas Udara</h2>
                        <img src="{{asset('client_side/assets/')}}/images/line-dec.png" alt="waves" >
                        <p>Anda dapat melakukan telemetering kualitas udara device 2 : CO<sub>2</sub>, O<sub>3</sub>, H<sub>2</sub>S, Debu, NH<sub>3</sub>, NO<sub>2</sub></p>
                        <br>
                        <div class="container-fluid" >
                          <div class="row justify-content-center">
                            <div class="col-20">
                              <div class="card">
                                <div class="card-header">
                                  <h5 class="card-title">Visual CO</h5>
                                </div>
                                <div class="card-body">
                                  <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1552131/charts/1?bgcolor=%23ffffff&color=%230000FF&dynamic=true&results=60&title=CO&type=line&update=15&yaxis=ppm"></iframe>
                                  <ul>
                                    @foreach($node2 as $t)
                                      <li>Data diambil pada : {{date('Y-m-d H:i:s', strtotime($t->waktu))}}</li>
                                      <li>Data Terakhir : {{$t->sensor_CO}} ppm</li>
                                    @endforeach
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
                                  <h5 class="card-title">Visual O<sub>3</sub></h5>
                                </div>
                                <div class="card-body">
                                  <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1552131/charts/2?bgcolor=%23ffffff&color=%230000FF&dynamic=true&results=60&title=O3&type=line&update=15&yaxis=ppm"></iframe>
                                  <ul>
                                    @foreach($node2 as $t)
                                      <li>Data diambil pada : {{date('Y-m-d H:i:s', strtotime($t->waktu))}}</li>
                                      <li>Data Terakhir : {{$t->sensor_O3}} ppb</li>
                                    @endforeach
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
                                  <h5 class="card-title">Visual H<sub>2</sub>S</h5>
                                </div>
                                <div class="card-body">
                                  <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1552131/charts/3?bgcolor=%23ffffff&color=%230000FF&dynamic=true&results=60&title=H2S&type=line&update=15&yaxis=ppm"></iframe>
                                  <ul>
                                    @foreach($node2 as $t)
                                      <li>Data diambil pada : {{date('Y-m-d H:i:s', strtotime($t->waktu))}}</li>
                                      <li>Data Terakhir : {{$t->sensor_H2S}} ppm</li>
                                    @endforeach
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
                                  <h5 class="card-title">Visual Debu</h5>
                                </div>
                                <div class="card-body">
                                  <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1552131/charts/4?bgcolor=%23ffffff&color=%230000FF&dynamic=true&results=60&title=Dust+Density&type=line&update=15&yaxis=mg%2Fm3"></iframe>
                                  <ul>
                                    @foreach($node2 as $t)
                                      <li>Data diambil pada : {{date('Y-m-d H:i:s', strtotime($t->waktu))}}</li>
                                      <li>Data Terakhir : {{$t->sensor_DUST}} mg/m<sup>3</sup></li>
                                    @endforeach
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
                                  <h5 class="card-title">Visual NH<sub>3</sub></h5>
                                </div>
                                <div class="card-body">
                                  <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1552131/charts/5?bgcolor=%23ffffff&color=%230000FF&dynamic=true&results=60&title=NH3&type=line&update=15&yaxis=ppm"></iframe>
                                  <ul>
                                    @foreach($node2 as $t)
                                      <li>Data diambil pada : {{date('Y-m-d H:i:s', strtotime($t->waktu))}}</li>
                                      <li>Data Terakhir : {{$t->sensor_NH3}} ppm</li>
                                    @endforeach
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
                                  <h5 class="card-title">Visual Sensor NO<sub>2</sub></h5>
                                </div>
                                <div class="card-body">
                                  <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1552131/charts/6?bgcolor=%23ffffff&color=%230000FF&dynamic=true&results=60&title=NO2&type=line&update=15&yaxis=ppm"></iframe>
                                  <ul>
                                    @foreach($node2 as $t)
                                      <li>Data diambil pada : {{date('Y-m-d H:i:s', strtotime($t->waktu))}}</li>
                                      <li>Data Terakhir : {{$t->sensor_NO2}} ppm</li>
                                    @endforeach
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->
@endsection
            