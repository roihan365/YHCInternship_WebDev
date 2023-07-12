@extends('layouts.admin')
@section('title', 'Tambah Kursus')

@section('content')
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Materi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Kursus</li>
              <li class="breadcrumb-item active">Tambah Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('materi.store') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleSelectBorder">Pilh Judul Kursus</label>
                    <select name="course_id" class="custom-select form-control-border" id="exampleSelectBorder">
                      <option value="">Pilih Kursus</option>
                      @foreach ($course as $course)
                          <option value="{{ $course->id}}">
                              {{ $course->title}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="title" class="form-control" placeholder="Masukkan Judul Materi">
                  </div>
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Deskripsi Materi">
                  </div>
                  <div class="form-group">
                    <label>URL Video</label>
                    <input type="text" name="video" class="form-control" id="exampleInputPassword1" placeholder="Contoh: https://youtu.be/WEmMeXbJJqs">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection