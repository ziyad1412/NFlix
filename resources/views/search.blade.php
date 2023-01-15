@extends('main')
@section('content')
    <div>
        <h4 class="text-danger fw-bold text-center">{{ $title }} <span class="text-dark">{{ $search }}</span></h4>

        <div class="container row row-cols-2 row-cols-md-6 g-4 mt-2 mx-auto d-flex justify-content-center">
            @foreach ($results as $movie)
                <div class="col">
                    <div class="card border-0">
                    <a href="/detail/{{ $movie->id }}" class="text-decoration-none">
                        <img src="{{ $movie->cover_img }}" class="card-img-top" alt="Gambar {{ $movie->judul }}">
                        <div class="card-body px-0">
                            <h6 class="card-title">{{ $movie->judul }}</h6>
                            <a href="/status/{{ $movie->status->status }}" class="text-decoration-none">
                                <small class="card-text">{{ $movie->status->status }}</small>
                            </a>
                        </div>
                    </a>
                    <div>
                        <a href="/type/{{ $movie->type_id }}" class="btn btn-danger btn-sm">{{ $movie->type->type }}</a>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection