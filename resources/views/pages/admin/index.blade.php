@extends('pages.layout.index')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="card-header">
          <h1>Selamat Datang di Halaman Dashboard, Admin</h1>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
          <!-- <div class="col-12 col-sm-6 col-md-3">
          </div> -->
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-primary">
              <h3>Data Sensor Telemetering</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body container-fluid">
                <div class="row">
                  <a href= "{{route('visual1')}}" class="btn col-12 col-sm-6 col-md-3 card-link active">
                    <div class="info-box mb-3">
                      <div class="info-box-content">
                        <span class="info-box-text"><b>Visualisasi Grafik Data Node 1</b></span>
                      </div>
                    </div>
                  </a>
                  <a href= "{{route('visual2')}}" class="btn col-12 col-sm-6 col-md-3 card-link active">
                    <div class="info-box mb-3">
                      <div class="info-box-content">
                        <span class="info-box-text"><b>Visualisasi Grafik Data Node 2</b></span>
                      </div>
                    </div>
                  </a>
                  <a href= "#" class="btn col-12 col-sm-6 col-md-3 card-link active">
                    <div class="info-box mb-3">
                      <div class="info-box-content">
                        <span class="info-box-text"><b>Visualisasi Grafik Data Node 3</b></span>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card">
              <div class="card-header bg-primary">
              <h3>Tentang kami</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <h3>Sistem Informasi Telemetering Tirtarona</h3>
              <br>
              <p>Kampung tirta rona adalah kampung edukasi yang dibuat oleh masyarakat rw 7 tlogomas.
                Wisata edukasi kampung lingkungan tirta rona ini memiliki lahan IPAL komunal yang sering dikunjungi masyarakat 
                dari berbagai kepnetingan dan wilayah sampai skala internasional. IPAL komunal ini dikelola oleh 
                Yayasan IPLt Tirta Rona Tologomas Tirta Rona yang diketuai oleh Drs. Agus Gunarto, Mm. Kondisi saat ini, 
                taman wisata lingkungan tirta rona telah dilengkapi oleh beberapa sarana yang dapat mendukung kegiatan wisata edukasi kampung iklim.</p>
              </div>
              <div class="card-footer bg-gradient-primary"></div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection