@extends('pages.layout.index')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data User</h1>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- <div class="card-header">
                <h3 class="card-title">Data Admin</h3>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">
                <a href="{{route('user.cetak_pdf')}}" class="btn btn-primary" target="_blank">CETAK PDF</a>
                <a href="{{route('user.create')}}" class="ml-1 btn btn-primary"><i class="fas fa-plus"></i>
                </a>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Tindakan</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php
                      $no = 1;
                    @endphp
                    @forelse ($users as $item)
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->username}}</td>
                    <td>
                        <a href="{{ route('user.edit', ['id' => $item->id]) }}" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Sunting Data"><i class="fas fa-pen"></i></a>
                        <a href="{{ route('user.delete', ['id' => $item->id]) }}" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus Data" onclick="return confirm('Apakah Anda ingin menghapus data ini?')"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                    @empty
                  <tr>
                      <td colspan="6" class="text-center">
                          <h5>Data Tidak Ditemukan</h5>
                      </td>
                  </tr>
                    @endforelse
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Tindakan</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
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