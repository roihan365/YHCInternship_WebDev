@extends('layouts.admin')
@section('title', 'Edit Kursus')

@section('content')
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Materi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Materi</li>
              <li class="breadcrumb-item active">Edit Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    @if ($errors -> any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

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
              <form action="{{ route('materi.update', $item->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleSelectBorder">Pilh Judul Kursus</label>
                    <select name="course_id" class="custom-select form-control-border" id="exampleSelectBorder">
                      <option value="{{$item->course_id}}">Jangan Diubah</option>
                      @foreach ($kursus as $course)
                          <option value="{{ $course->id}}">
                              {{ $course->title}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="title" class="form-control" placeholder="Masukkan Judul Materi" value="{{ $item->title }}">
                  </div>
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Deskripsi Materi" value="{{ $item->description }}">
                  </div>
                  <div class="form-group">
                    <label>URL Video</label>
                    <input type="text" name="video" class="form-control" id="exampleInputPassword1" placeholder="Contoh: https://youtu.be/WEmMeXbJJqs" value="{{ $item->video }}">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit Data</button>
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