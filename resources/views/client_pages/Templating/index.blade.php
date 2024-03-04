@extends('client_pages.Layout.index')
@section('content')
@include('client_pages.Templating.header')

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="{{asset('client_side/assets/')}}/images/cloud.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>Selamat datang di website</h6>
                <h2>Telemetering Kualitas Udara dan Iklim <br> Tirtarona</h2>
                <div class="main-button scroll-to-section">
                    <a href="#features">Telemetering</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Monitoring ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Telemetering Kualitas Udara dan Iklim</h2>
                        <img src="{{asset('client_side/assets/')}}/images/line-dec.png" alt="waves">
                        <p>Anda dapat melakukan telemetering secara realtime meliputi kualitas udara dan iklim</p>
                        <br>
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-12">
                              <div class="card">
                                <div class="card-header">
                                  <h4 class="card-title">Ramalan Cuaca</h4>
                                </div>
                                <div class="card-body">
                                  <!-- <a href="#" class="btn btn-primary" target="_blank">CETAK PDF</a> -->
                                  </a>
                                  <table id="kualitas" class="table table-bordered table-hover">
                                  <center><div id="openweathermap-widget-5"></div></center>
                                </table>
                              </div>
                            </div>
                          </div>
                      </div>
                      </div>
                    </div>
                    
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{asset('client_side/assets/')}}/images/dashboard.png" alt="Monitoring Cuaca" style="width:120px;height:120px;">
                            </div>
                            <div class="right-content">
                                <h4>Telemetering Device 1</h4>
                                <p>Lokasi telemetering device 1 berada di daerah sekitar IPAL. Anda dapat melakukan telemetering device 1 secara realtime silakan klik "Lihat Selengkapnya"</p>
                                <a href="{{route('device1')}}" class="text-button">Lihat Selengkapnya</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{asset('client_side/assets/')}}/images/dashboard.png" alt="Monitoring Kualitas Udara" style="width:120px;height:120px;">
                            </div>
                            <div class="right-content">
                                <h4>Telemetering Device 2</h4>
                                <p>Lokasi telemetering device 2 berada di daerah jalan menuju IPAL. Anda dapat melakukan telemetering device 2 secara realtime silakan klik "Lihat Selengkapnya"</p>
                                <a href="{{route('device2')}}" class="text-button">Lihat Selengkapnya</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- <div class="col-lg-6">
                  <ul class="features-items">
                      <li class="feature-item">
                          <div class="left-icon">
                              <img src="{{asset('client_side/assets/')}}/images/dashboard.png" alt="Monitoring Kualitas Udara" style="width:120px;height:120px;">
                          </div>
                          <div class="right-content">
                                <h4>Telemetering Device 3</h4>
                                <p>Lokasi telemetering device 3 berada di dekat mushola. Anda dapat melakukan telemetering device 3 secara realtime silakan klik "Lihat Selengkapnya"</p>
                              <a href="{{route('device3')}}" class="text-button">Lihat Selengkapnya</a>
                          </div>
                      </li>
                  </ul>
              </div> -->
          
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
                      <p>Tirtarona sebagai wisata peduli perubahan iklim memiliki kegiatan dalam berperan terhadap perubahan iklim.</p>
                  </div>
              </div>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="trainer-item">
                  <div class="image-thumb">
                      <img src="{{asset('client_side/assets/')}}/images/ArtikelHidro2.png" alt="" >
                  </div>
                  <div class="down-content">
                    <br>
                      <h4>Program Hidroponik Warga</h4>
                      <p>
                      Hidroponik adalah budidaya pertanian tanpa menggunakan media tanah, sehingga hanya dijalankan dengan menggunakan air sebagai pengganti tanah. Pertanian dengan menggunakan sistem hidroponik tidak memerlukan lahan yang luas, dapat diberi nutrisi dengan mudah dan efisien, serta tidak menyebabkan polusi lingkungan.
                    </p>
                      <a href="https://tirtarona-telemetering.com/hidroponik" class="text-button">Lihat Selengkapnya</a>
                  </div>
              </div>
          </div>
          <div class="col-lg-4">
              <div class="trainer-item">
                  <div class="image-thumb">
                      <img src="{{asset('client_side/assets/')}}/images/Biopori1.png" alt="" >
                  </div>
                  <div class="down-content">
                    <br>
                      <h4>Program Biopori</h4>
                      <p>
                      Beberapa warga RW 7 sudah memiliki biopori namun, diperlukan pengelolaan karena kinerja biopori yang sudah ada sering terhambat oleh adanya material seperti pasir yang tidak dapat dikeluarkan. Kerja sama antara ITN dengan RW 07 Kelurahan Tlogomas terkait biopori ini adalah membawa desain biopori yang baru supaya kinerja daya serap air permukaan ke dalam tanah lebih optimal dan efektif. Program pembuatan biopori dapat juga dimanfaatkan sebagai tempat rekreasi pembelajaran teknologi yang inovatif.
                     </p>
                      <a href="https://tirtarona-telemetering.com/biopori" class="text-button">Lihat Selengkapnya</a>
                  </div>
              </div>
          </div>
          <div class="col-lg-4">
              <div class="trainer-item">
                  <div class="image-thumb">
                      <img src="{{asset('client_side/assets/')}}/images/Wirausaha1.jpeg" alt="" >
                  </div>
                  <div class="down-content">
                    <br>
                      <h4>Program Kewirausahaan</h4>
                      <p>
                      Kewirausahaan adalah konsep yang memiliki banyak definisi mulai dari definisi yang sempit seperti memulai bisnis sendiri sampai kepada konsep yang lebih luas yaitu sikap kerja yang menekankan kepada kepercayaan diri, inisiatif, inovatif, berani mengambil resiko. Selain itu, Kewirausahaan adalah satu atau lebih orang yang berani mengambil resiko ekonomi membuat organisasi baru, dan mengunakan teknologi baru atau teknologi inovatif untuk membuat nilai (Creating Value) bagi orang lain.                       </p>
                      <a href="https://tirtarona-telemetering.com/kewirausahaan" class="text-button">Lihat Selengkapnya</a>
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
  <!-- ***** Testimonials Ends ***** -->

    <!-- ***** Kegiatan ***** -->
    <section class="section" id="Kegiatan">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Kegiatan Kami</h2>
                        <img src="{{asset('client_side/assets/')}}/images/line-dec.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'>Kegiatan Inti</a></li>
                  <li><a href='#tabs-2'>Kegiatan Tiap Minggu</a></li>
                  <li><a href='#tabs-3'>Kegiatan Tiap Bulan</a></li>
                  <li><a href='#tabs-4'>Kegiatan Tiap Tahun</a></li>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    
                    <img src="{{asset('client_side/assets/')}}/images/PWisma.jpeg" alt="Second Training">
                    <h4>Dasa Wisma XI</h4>
                    <p>Kegiatan untuk pembenahan admiistrasi dari sumber dana kas dawis dan kas PKK</p>
                    <br> <br>
                    <img src="{{asset('client_side/assets/')}}/images/PGotongRoyong.jpeg" alt="Second Training">
                    <h4>Gotong Royong</h4>
                    <p>Kegiatan untuk membersihkan sekitar kampung Tirtarona</p>
                    <br> <br>
                    <img src="{{asset('client_side/assets/')}}/images/PMusholla.jpeg" alt="Second Training">
                    <h4>Bersih-bersih Musholla</h4>
                    <p>Kegiatan ini dilaksanakan untuk membersihkan dan merapikan barang-barang yang ada di musholla.</p>
                    <br> <br>

                    <img src="{{asset('client_side/assets/')}}/images/PJalanRaya.jpeg" alt="Third Class">
                    <h4>Perbaikan Jalan Raya</h4>
                    <p>Kegiatan untuk memperbaiki jalan raya di sekitar kampung Tirtarona</p>
                    <br><br>
                    <img src="{{asset('client_side/assets/')}}/images/PMCK.jpeg" alt="Third Class">
                    <h4>MCK</h4>
                    <p>Kegiatan untuk membenahi dan memperbaiki fasilitas MCK</p>
                   
                    <br><br>
                    
                    <img src="{{asset('client_side/assets/')}}/images/PHUTRI.jpeg" alt="Fourth Training">
                    <h4>Peringatan HUT RI</h4>
                    <p>Kegiatan ini dilaksanakan pada pekan 17 Agustus tiap tahun untuk memperingati HUT RI dengan rangkaian acara upacara atau lomba-lomba</p>
                    <br><br>
                    <img src="{{asset('client_side/assets/')}}/images/PBiopori.png" alt="Fourth Training">
                    <h4>Bipori</h4>
                    <p>Kegiatan ini dilaksanakan untuk merawat atau pemasangan bipori dari sumber dana swadaya</p>
                    <br><br>
                    <img src="{{asset('client_side/assets/')}}/images/PCat.jpeg" alt="Fourth Training">
                    <h4>Pengecatan</h4>
                    <p>Kegiatan ini dilaksanakan untuk mengecat berem dari sumber dana swadaya</p>
                    <br><br>

                  </article>

                  <article id='tabs-2'>
                    <img src="{{asset('client_side/assets/')}}/images/PWisma.jpeg" alt="Second Training">
                    <h4>Desa Wisma XI</h4>
                    <p>Kegiatan untuk pembenahan admiistrasi dari sumber dana kas dawis dan kas PKK</p>
                    <br> <br>
                    <img src="{{asset('client_side/assets/')}}/images/PGotongRoyong.jpeg" alt="Second Training">
                    <h4>Gotong Royong</h4>
                    <p>Kegiatan untuk membersihkan sekitar kampung Tirtarona</p>
                    <br> <br>
                    <img src="{{asset('client_side/assets/')}}/images/PMusholla.jpeg" alt="Second Training">
                    <h4>Bersih-bersih Musholla</h4>
                    <p>Kegiatan ini dilaksanakan untuk membersihkan dan merapikan barang-barang yang ada di musholla.</p>
                    <br> <br>
                  </article>
                  <article id='tabs-3'>
                    <img src="{{asset('client_side/assets/')}}/images/PJalanRaya.jpeg" alt="Third Class">
                    <h4>Perbaikan Jalan Raya</h4>
                    <p>Kegiatan untuk memperbaiki jalan raya di sekitar kampung Tirtarona</p>
                    <br><br>
                    <img src="{{asset('client_side/assets/')}}/images/PMCK.jpeg" alt="Third Class">
                    <h4>MCK</h4>
                    <p>Kegiatan untuk membenahi dan memperbaiki fasilitas MCK</p>
                   
                    <br><br>
                  </article>
                  <article id='tabs-4'>
                    <img src="{{asset('client_side/assets/')}}/images/PHUTRI.jpeg" alt="Fourth Training">
                    <h4>Peringatan HUT RI</h4>
                    <p>Kegiatan ini dilaksanakan pada pekan 17 Agustus tiap tahun untuk memperingati HUT RI dengan rangkaian acara upacara atau lomba-lomba</p>
                    <br><br>
                    <img src="{{asset('client_side/assets/')}}/images/PBiopori.png" alt="Fourth Training">
                    <h4>Biopori</h4>
                    <p>Kegiatan ini dilaksanakan untuk merawat atau pemasangan bipori dari sumber dana swadaya</p>
                    <br><br>
                    <img src="{{asset('client_side/assets/')}}/images/PCat.jpeg" alt="Fourth Training">
                    <h4>Pengecatan</h4>
                    <p>Kegiatan ini dilaksanakan untuk mengecat berem dari sumber dana swadaya</p>
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Classes End ***** -->
    
    
    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="penghargaan">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 offset-lg-3">
                  <div class="section-heading">
                      <h2>Penghargaan</h2>
                      <img src="{{asset('client_side/assets/')}}/images/line-dec.png" alt="">
                  </div>
              </div>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="trainer-item">
                  <div class="image-thumb">
                      <img src="{{asset('client_side/assets/')}}/images/Piala penghargaan.jpg" alt="" style="width:300px;height:450px;">
                  </div>
                  <div class="down-content">
                      <span>Penghargaan Tingkat Nasional</span>
                      <h4>Lomba kebersihan dan penghijauan lingkungan</h4>
                      <p>Lomba kebersihan dan penghijauan lingkungan</p>
                     
                  </div>
              </div>
          </div>
          <div class="col-lg-4">
            <div class="trainer-item">
                <div class="image-thumb">
                    <img src="{{asset('client_side/assets/')}}/images/IMG_Satya.JPG" alt="" >
                </div>
                <div class="down-content">
                    <span>Penghargaan Tingkat Nasional</span>
                    <h4>Penghargaan satya lencana pembangunan bidang lingkungan hidup 2007</h4>
                    <p>Penghargaan satya lencana pembangunan bidang lingkungan hidup 2007</p>
                   
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="trainer-item">
                <div class="image-thumb">
                    <img src="{{asset('client_side/assets/')}}/images/Penghargaan_kalpataru_januari_2001.JPG" alt="" >
                </div>
                <div class="down-content">
                    <span>Penghargaan Tingkat Nasional</span>
                    <h4>Penghargaan kalpataru januari 2001</h4>
                    <p>Penghargaan kalpataru januari 2001</p>
                   
                </div>
            </div>
        </div>
        <div class="col-lg-4">
          <div class="trainer-item">
              <div class="image-thumb">
                  <img src="{{asset('client_side/assets/')}}/images/Penghargaan adipura & kalpataru.JPG" alt="" >
              </div>
              <div class="down-content">
                  <span>Penghargaan Tingkat Nasional</span>
                  <h4>Penghargaan Adipura & kalpataru Juni 1997</h4>
                  <p>Penghargaan Adipura & kalpataru Juni 1997</p>
              </div>
          </div>
      </div>
    </div>
</div>
          </div>
      </div>
  </section>




    
    

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