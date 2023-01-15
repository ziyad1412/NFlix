@extends('main')
@section('content')
    <h5 class="text-center my-3 fw-bold">List Movie</h5>
    <p class="text-center">Menampilkan total {{ count($movies) }} Movie:</p>
    <div class="container">
        <ul class="row-md-4 d-md-flex flex-wrap justify-content-end">
            @foreach ($movies as $movie)
                <li class="my-2 col-md-5 mx-2">
                    <a href="/detail/{{ $movie->id }}" class="text-decoration-none">{{ $movie->judul }} <small class="{{ $movie->status_id==1?'text-danger':'text-success' }}">({{ $movie->status->status }})</small></a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection