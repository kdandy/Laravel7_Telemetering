@extends('client_pages.Layout.index')
@section('content')
@include('client_pages.Templating.header')

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">TIRTARONA TELEMETERING</a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#features">Monitoring</a></li>
                            <li class="scroll-to-section"><a href="#program">Program</a></li>
                            <li class="scroll-to-section"><a href="#Kegiatan">Kegiatan</a></li>
                            <li class="scroll-to-section"><a href="#Penghargaan">Penghargaan</a></li>
                            <li class="scroll-to-section"><a href="#contact-us">Contact</a></li> 
                            <li class="main-button"><a href="#">Admin</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

   

    <!-- ***** Monitoring ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2><br> <br> Monitoring Cuaca</h2>
                        <img src="{{asset('client_side/assets/')}}/images/line-dec.png" alt="waves">
                        <p>Anda dapat melakukan monitoring telemetering secara realtime, Berikut tabel tele 1 </p>
                    

<!-- Data Sensor Keadaan angin -->
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Sensor Keadaan Angin</h3>
          </div>
          <div class="card-body">
            <!-- <a href="#" class="btn btn-primary" target="_blank">CETAK PDF</a> -->
            </a>
            <table id="keadaan_angin" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Waktu</th>
                <th>Kecepatan Angin</th>
                <th>Arah Angin</th>
              </tr>
            </thead>
            <tbody>
               @php
                $no = 1
                @endphp
                @foreach($node1 as $t)
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{date('Y-m-d H:i:s', strtotime($t->waktu))}}</td>
                    <td>{{$t->sensor_WIND_SPEED}}</td>
                    <td>{{$t->sensor_WIND_DIRECT}}</td>
                  </tr>
                @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>#</th>
                <th>Waktu</th>
                <th>Kecepatan Angin</th>
                <th>Arah Angin</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
    </div>

<!-- Data Sensor Kualitas Udara -->
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Sensor Kualitas Udara</h3>
          </div>
          <div class="card-body">
            <!-- <a href="#" class="btn btn-primary" target="_blank">CETAK PDF</a> -->
            </a>
            <table id="kualitas" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Waktu</th>
                <th>CO</th>
                <th>O3</th>
                <th>H2S</th>
                <th>DUST</th>
                <th>NH3</th>
                <th>NO2</th>
              </tr>
            </thead>
            <tbody>
               @php
                $no = 1
                @endphp
                @foreach($node1 as $t)
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{date('Y-m-d H:i:s', strtotime($t->waktu))}}</td>
                    <td>{{$t->sensor_CO}}</td> 
                    <td>{{$t->sensor_O3}}</td>
                    <td>{{$t->sensor_H2S}}</td>
                    <td>{{$t->sensor_DUST}}</td>
                    <td>{{$t->sensor_NH3}}</td>
                    <td>{{$t->sensor_NO2}}</td>
                  </tr>
                @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>#</th>
                <th>Waktu</th>
                <th>CO</th>
                <th>O3</th>
                <th>H2S</th>
                <th>DUST</th>
                <th>NH3</th>
                <th>NO2</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
    </div>


        <!-- Data Sensor Cuaca -->
        <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Data Sensor Cuaca</h3>
                  </div>
                  <div class="card-body">
                    <!-- <a href="#" class="btn btn-primary" target="_blank">CETAK PDF</a> -->
                    </a>
                    <table id="cuaca" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Waktu</th>
                          <th>Suhu</th>
                          <th>Kelembaban</th>
                          <th>Tekanan Udara</th>
                          <th>Hujan</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                        $no = 1
                        @endphp
                        @foreach($node1 as $t)
                          <tr>
                            <td>{{$no++}}</td>
                            <td>{{date('Y-m-d H:i:s', strtotime($t->waktu))}}</td>
                            <td>{{$t->sensor_TEMPERATURE}}</td>
                            <td>{{$t->sensor_HUMIDITY}}</td>
                            <td>{{$t->sensor_PRESSURE}}</td>
                            <td>{{$t->sensor_RAIN}}</td>
                          </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>#</th>
                          <th>Waktu</th>
                          <th>Suhu</th>
                          <th>Kelembaban</th>
                          <th>Tekanan Udara</th>
                          <th>Hujan</th>
                        </tr>
                      </tfoot>
                    </table>
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

    
    
    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="program">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 offset-lg-3">
                  <div class="section-heading">
                      <h2>Program Kami</h2>
                      <img src="{{asset('client_side/assets/')}}/images/line-dec.png" alt="">
                      <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                  </div>
              </div>
          </div>
          
    <div class="col-lg-4">
      <div class="trainer-item">
          <div class="image-thumb">
              <img src="{{asset('client_side/assets/')}}/images/IMG_6709.JPG" alt="" >
          </div>
          <div class="down-content">
              <span>Penghargaan Tingkat Nasional</span>
              <h4>Wissata Terbaik se-Indonesia</h4>
              <p>Penghargaan ini diberikan pada tahun 2004 atas keberhasilan kami  dalam menjaga lingkungan wisata</p>
             
          </div>
      </div>
  </div>
  <div class="col-lg-4">
    <div class="trainer-item">
        <div class="image-thumb">
            <img src="{{asset('client_side/assets/')}}/images/IMG_6709.JPG" alt="" >
        </div>
        <div class="down-content">
            <span>Penghargaan Tingkat Nasional</span>
            <h4>Wissata Terbaik se-Indonesia</h4>
            <p>Penghargaan ini diberikan pada tahun 2004 atas keberhasilan kami  dalam menjaga lingkungan wisata</p>
           
        </div>
    </div>
</div>
<div class="col-lg-4">
  <div class="trainer-item">
      <div class="image-thumb">
          <img src="{{asset('client_side/assets/')}}/images/IMG_6709.JPG" alt="" >
      </div>
      <div class="down-content">
          <span>Penghargaan Tingkat Nasional</span>
          <h4>Wissata Terbaik se-Indonesia</h4>
          <p>Penghargaan ini diberikan pada tahun 2004 atas keberhasilan kami  dalam menjaga lingkungan wisata</p>
         
      </div>
  </div>
</div>
          </div>
      </div>
  </section>
  <!-- ***** Testimonials Ends ***** -->

    

    
    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div id="map">
                      <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                              <fieldset>
                                <input name="subject" type="text" id="subject" placeholder="Subject">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Send Message</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->
    
@endsection