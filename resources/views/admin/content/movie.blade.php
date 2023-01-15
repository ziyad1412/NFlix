<?php
$i = 1;
?>
@extends('admin.main')
@section('content')
    <div class="content-header container-fluid mb-2 pl-3">
        <h1>Movie</h1>
    </div>
    <div class="container">
    <div class="card">
        <div class="card-header d-flex row-12 align-items-center">
          <h3 class="card-title col">Manage Data Movie</h3>
          <div class="d-flex justify-content-end w-100 col">
            <a href="/admin/add" class="btn btn-primary">Add Movie</a>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>NO</th>
              <th>Judul</th>
              <th>Thumbnail</th>
              <th>Sinopsis</th>
              <th>Status</th>
              <th>Rate</th>
              <th>Tipe</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $movie->judul }}</td>
                    <td><img src="{{ $movie->cover_img }}" alt="{{ $movie->cover_img }}" width="87px"></td>
                    <td>{{ $movie->sinopsis }}</td>
                    <td>{{ $movie->status->status }}</td>
                    <td>
                            <?php
                                $count = 0;
                                $result = 0;

                                foreach ($movie->rating as $rating) {
                                    $count += 1;
                                    $result += $rating->score;
                                }
                            ?>
                      {{ round($result/$count, 1) }}
                    </td>
                    <td>{{ $movie->type->type }}</td>
                    <td>
                        <a href="/movie/edit/{{ $movie->id }}" class="btn btn-warning">Edit</a>
                        <a href="/movie/delete/{{ $movie->id }}" onclick="return confirm('Apakah Anda yakin?')" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>NO</th>
                <th>Judul</th>
                <th>Thumbnail</th>
                <th>Sinopsis</th>
                <th>Status</th>
                <th>Rate</th>
                <th>Tipe</th>
                <th>Action</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>


    <script>
      var msg = '{{Session::get('jsAlert')}}';
      var exist = '{{Session::has('jsAlert')}}';
      if(exist){
        alert(msg);
      }
    </script>
      @endsection