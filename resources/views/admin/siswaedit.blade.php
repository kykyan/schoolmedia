@extends('admin.master')

@section('title', 'Detail | Data Siswa')

@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Biodata Siswa</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Edit Biodata Siswa</h3>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('siswaupdate', $user->id) }}">
                    @method('patch')
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="name" required="required" value="{{ $user->name }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" required="required" value="{{ $user->email }}" disabled>
                        </div>
                    </div>
                    <div class="form row">
                        <div class="form-group col-md-8">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="address" required="required" value="{{ $user->address }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label>No Telfon</label>
                            <input type="text" class="form-control" name="phone" required="required" value="{{ $user->phone }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Jenis Kelamin</label>
                            <select class="form-control" name="gender" required="required">
                                <option value="{{ $user->gender }}" selected>@if ($user->gender == 'P')
                                    <p>Perempuan</p>
                                @else
                                    <p>Laki-laki</p>
                                @endif</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" name="birthcity" required="required" value="{{ $user->birthcity }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="birthdate"required="required" value="{{ $user->birthdate }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Ubah Data!</button>
                </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
  
      </section>
      <!-- /.content -->
  </div>

@endsection