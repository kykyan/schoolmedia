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
        <div class="d-flex justify-content-center">
            <div class="card col-8">
                <div class="card-body">
                    <h2>{{ $user->name }}</h2>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Email</label>
                            <p>{{ $user->email }}</p>
                        </div>
                        <div class="form-group col-md-6">
                            <label>No HP</label>
                            <p>{{ $user->phone }}</p>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Jenis Kelamin</label>
                            @if ($user->gender == 'P')
                                <p>Perempuan</p>
                            @else
                                <p>Laki-laki</p>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label>Alamat</label>
                            <p>{{ $user->address }}</p>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Tempat Lahir</label>
                            <p>{{ $user->birthcity }}</p>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Tanggal Lahir</label>
                            <p>{{ date('d M Y', strtotime($user->birthdate)) }}</p>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <a href="{{ route('siswaedit', $user->id) }}" class="btn btn-primary">Edit</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                            Delete
                            </button>
    
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Peringatan!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Apakah anda yakin ingin menghapus data?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <form action="{{ $user->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
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
      <!-- /.content -->
  </div>

@endsection