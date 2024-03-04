@extends('pages.layout.index')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Data Admin</h1>
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
                <form method="POST" action="{{ route('user.update', ['id' => $user->id]) }}">
                    <div class="card">
                        <div class="card-header">
                            <h4>Form Edit Data User {{$user->username}}</h4>
                            <div class="card-header-form">
                            </div>
                        </div>
                        <div class="card-body">
                            @csrf
                                <input name="_method" type="hidden" value="PATCH">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="name">Username</label>
                                                <input id="username" type="text" class="form-control" name="username" placeholder="Username" value="{{$user->user_name}}" >
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Password</label>
                                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" value="{{$user->password}}" >
                                            </div>
                                        <button type="submit" class="btn btn-primary btn-lg" tabindex="4">
                                            <i class="fas fa-pen"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection