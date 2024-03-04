@extends('pages.layout.index')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Data Sensor Keseluruhan Device Telemetering 2</h1>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Data Sensor Keseluruhan -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Sensor Keseluruhan</h3>
              </div>
              <div class="card-body">
                <a href="{{route('node2.cetak_pdf')}}" class="btn btn-primary" target="_blank">CETAK PDF</a>
                <!-- <a href="#" class="ml-1 btn btn-primary"><i class="fas fa-plus"></i> -->
                </a>
                <table id="keseluruhan" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>WAKTU</th>
                      <th>CO</th>
                      <th>O3</th>
                      <th>H2S</th>
                      <th>DUST</th>
                      <th>NH3</th>
                      <th>NO2</th>
                      <th>TEMP</th>
                      <th>HUMID</th>
                      <th>PRESSURE</th>
                      <th>RAIN</th>
                      <th>WIND SPEED</th>
                      <th>WIND DIRECT</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $no = 1
                    @endphp
                    @foreach($node2 as $t)
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{date('Y-m-d H:i:s', strtotime($t->waktu))}}</td>
                        <td>{{$t->sensor_CO}}</td> 
                        <td>{{$t->sensor_O3}}</td>
                        <td>{{$t->sensor_H2S}}</td>
                        <td>{{$t->sensor_DUST}}</td>
                        <td>{{$t->sensor_NH3}}</td>
                        <td>{{$t->sensor_NO2}}</td>
                        <td>{{$t->sensor_TEMPERATURE}}</td>
                        <td>{{$t->sensor_HUMIDITY}}</td>
                        <td>{{$t->sensor_PRESSURE}}</td>
                        <td>{{$t->sensor_RAIN}}</td>
                        <td>{{$t->sensor_WIND_SPEED}}</td>
                        <td>{{$t->sensor_WIND_DIRECT}}</td>
                      </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>WAKTU</th>
                      <th>CO</th>
                      <th>O3</th>
                      <th>H2S</th>
                      <th>DUST</th>
                      <th>NH3</th>
                      <th>NO2</th>
                      <th>TEMP</th>
                      <th>HUMID</th>
                      <th>PRESSURE</th>
                      <th>RAIN</th>
                      <th>WIND SPEED</th>
                      <th>WIND DIRECT</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<!-- <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#keseluruhan').DataTable({
        "paging": true,
        "pageLength": 10,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script> -->
@endsection