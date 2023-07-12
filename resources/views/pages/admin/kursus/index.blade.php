@extends('layouts.admin')
@section('title', 'Kursus')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Kursus</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kursus</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="{{ route('course.create') }}" class="btn btn-md btn-primary shadow-md">
                  <i class="fas fa-plus fa-sm text-white">Tambah Kursus</i>
                </a>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Thumbnail</th>
                      <th>Judul</th>
                      <th>Deskripsi</th>
                      <th>Durasi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($data as $data)
                    <tr>
                      <td>{{ $data->id }}</td>
                      <td>
                        <img src="{{ Storage::url($data->thumbnail)}}" alt="" style="width: 150px" class="img-thumbnail">
                      </td>
                      <td>{{ $data->title }}</td>
                      <td>{{ Str::limit($data->description, 20) }}</td>
                      <td>{{ $data->duration }}</td>
                      <td>
                        <a href="{{ route('course.edit', $data->id) }}" class="btn btn-info">
                        <i class="fa fa-pencil-alt"></i>
                        </a>
                        <form action="{{ route('course.destroy', $data->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('delete')
                          <button class="btn btn-danger">
                              <i class="fa fa-trash"></i>
                          </button>
                        </form>
                      </td>
                    </tr>
                    @empty
                        <tr>
                          <td colspan="5" class="text-center">TIDAK ADA DATA</td>
                        </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection