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
                        <h2>Telemetering Device 2 - Iklim</h2>
                        <img src="{{asset('client_side/assets/')}}/images/line-dec.png" alt="waves" >
                        <p>Anda dapat melakukan telemetering iklim device 2 : Suhu, Kelembaban, Tekanan Udara, Curah Hujan</p>
                        <br>
                        <div class="container-fluid" >
                            <div class="row justify-content-center">
                              <div class="col-20">
                                <div class="card">
                                  <div class="card-header">
                                    <h5 class="card-title">Ramalan Cuaca</h5>
                                  </div>
                                  <div class="card-body">
                                    <div id="openweathermap-widget-5"></div>
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
                                    <h5 class="card-title">Visual Suhu</h5>
                                  </div>
                                  <div class="card-body">
                                    <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1552125/charts/1?bgcolor=%23ffffff&color=%230000FF&dynamic=true&results=60&title=Temperature&type=line&update=15&yaxis=deg+C"></iframe>
                                    <ul>
                                      @foreach($node2 as $t)
                                        <li>Data diambil pada : {{date('Y-m-d H:i:s', strtotime($t->waktu))}}</li>
                                        <li>Data Terakhir : {{$t->sensor_TEMPERATURE}} &deg;C</li>
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
                                    <h5 class="card-title">Visual Kelembapan</h5>
                                  </div>
                                  <div class="card-body">
                                    <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1552125/charts/2?bgcolor=%23ffffff&color=%230000FF&dynamic=true&results=60&title=Humidity&type=line&update=15&yaxis=%25"></iframe>
                                    <ul>
                                      @foreach($node2 as $t)
                                        <li>Data diambil pada : {{date('Y-m-d H:i:s', strtotime($t->waktu))}}</li>
                                        <li>Data Terakhir : {{$t->sensor_HUMIDITY}} %</li>
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
                                    <h5 class="card-title">Visual Tekanan Udara</h5>
                                  </div>
                                  <div class="card-body">
                                    <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1552125/charts/3?bgcolor=%23ffffff&color=%230000FF&dynamic=true&results=60&title=Pressure&type=line&update=15&yaxis=hPa"></iframe>
                                    <ul>
                                      @foreach($node2 as $t)
                                        <li>Data diambil pada : {{date('Y-m-d H:i:s', strtotime($t->waktu))}}</li>
                                        <li>Data Terakhir : {{$t->sensor_PRESSURE}} hPa</li>
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
                                    <h5 class="card-title">Visual Curah Hujan</h5>
                                  </div>
                                  <div class="card-body">
                                    <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1552125/charts/4?bgcolor=%23ffffff&color=%230000FF&dynamic=true&results=60&title=Rainfall&type=line&update=15&yaxis=mm"></iframe>
                                    <ul>
                                      @foreach($node2 as $t)
                                        <li>Data diambil pada : {{date('Y-m-d H:i:s', strtotime($t->waktu))}}</li>
                                        <li>Data Terakhir : {{$t->sensor_RAIN}} mm(day)</li>
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
  <script>
    window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];
    window.myWidgetParam.push({
        id: 5,cityid: '1636722',
        appid: 'bcccbaa299b2e0df1fac63f71d3ccdd5',
        units: 'metric',
        containerid: 'openweathermap-widget-5',  
    });  
    (function() {
        var script = document.createElement('script');
        script.async = true;
        script.charset = "utf-8";
        script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(script, s);  
    })();
</script>
@endsection