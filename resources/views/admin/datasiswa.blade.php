@extends('admin.master')

@section('title', 'Data Siswa')

@section('content')
  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Siswa</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="table-responsive">
        <table id="example1" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Email</th>
              <th>Jenis Kelamin</th>
              <th>Tanggal Lahir</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $u)
            <tr>
              <td>{{ $u->name }}</td>
              <td>{{ $u->email }}</td>
              <td>{{ $u->gender }}</td>
              <td>{{ $u->birthdate }}</td>
              <td><a href="{{ route('siswashow', $u->id) }}" class="badge badge-info">Detail</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

    </section>
    <!-- /.content -->
  </div>

@endsection