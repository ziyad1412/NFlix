@extends('main')
@section('content')
<div class="recomended container">
  <h3 class="p-3 text-center">Recomended <span class="text-danger">Movie</span></h3>
  <div class="row row-cols-1 row-cols-md-2">

    @foreach ($movies as $movie)
        <div class="col">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <a href="/detail/{{ $movie->id }}"><img src="{{ $movie->cover_img }}" class="img-fluid rounded-start" alt="..."></a>
              </div>
              <div class="col-md-8">
                <a href="/detail/{{ $movie->id }}" class="text-decoration-none text-dark">
                  <div class="card-body">
                    <h5 class="card-title">{{ $movie->judul }}</h5>
                    <p class="card-text">
                      <small><a href="/status/{{ $movie->status->status }}" class="text-decoration-none {{ $movie->status_id==1?'text-danger':'text-success' }}">
                        {{ $movie->status->status }}
                      </a></small>
                    </p>
                    <a href="/detail/{{ $movie->id }}" class="card-text text-dark text-decoration-none">
                      <p>{{ mb_strimwidth($movie->sinopsis, 0, 150, '...') }}</p>
                    </a>
                    <div class="m-2">
                      @foreach ($movie_genres::where('movie_id', $movie->id)->get() as $movie_genre)
                          <a href="/genre/{{ $genre::find($movie_genre->genre_id)->genre }}" class="btn btn-danger btn-sm rounded-pill">{{ $genre::find($movie_genre->genre_id)->genre }}</a>
                      @endforeach
                    </div>
                  </div>
              </a>
              </div>
            </div>
          </div>
        </div>
    @endforeach

  </div>
</div>

<div class="ongoing mt-3" style="background-color: #111">
  <h3 class="text-light p-3 text-center">Movie <span class="text-danger">Ongoing</span></h3>
  <div class="row row-cols-1 row-cols-md-2 container mx-auto">

    @foreach ($ongoing as $movie)
        <div class="col">
          <div class="card mb-3 bg-dark text-light" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <a href="/detail/{{ $movie->id }}">
                  <img src="{{ $movie->cover_img }}" class="img-fluid rounded-start" alt="...">
                </a>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                    <a href="/detail/{{ $movie->id }}" class="text-decoration-none text-light">
                      <h5 class="card-title">{{ $movie->judul }}</h5>
                    </a>
                    <div class="m-2">
                      @foreach ($movie_genres::where('movie_id', $movie->id)->get() as $movie_genre)
                      <a href="/genre/{{ $genre::find($movie_genre->genre_id)->genre }}" class="btn btn-danger btn-sm rounded-pill">{{ $genre::find($movie_genre->genre_id)->genre }}</a>
                      @endforeach
                    </div>
                    <a href="/detail/{{ $movie->id }}" class="card-text text-light text-decoration-none">
                      <p>{{ mb_strimwidth($movie->sinopsis, 0, 150, '...') }}</p>
                    </a>
                    <p class="card-text"><small class="text-muted">Last updated: {{ $movie->updated_at }}</small></p>
                  </div>
              </div>
            </div>
          </div>
        </div>
    @endforeach

  </div>
</div>

<div class="recomended container mt-4">
  <h3 class="p-3 text-center">Latest <span class="text-danger">Movie</span></h3>
  <div class="row row-cols-1 row-cols-md-2">

    @foreach ($film as $movie)
        <div class="col">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <a href="/detail/{{ $movie->id }}"><img src="{{ $movie->cover_img }}" class="img-fluid rounded-start" alt="..."></a>
              </div>
              <div class="col-md-8">
                <a href="/detail/{{ $movie->id }}" class="text-decoration-none text-dark">
                  <div class="card-body">
                    <h5 class="card-title">{{ $movie->judul }}</h5>
                    <p class="card-text">
                      <small><a href="/status/{{ $movie->status->status }}" class="text-decoration-none {{ $movie->status_id==1?'text-danger':'text-success' }}">
                        {{ $movie->status->status }}
                      </a></small>
                    </p>
                    <a href="/detail/{{ $movie->id }}" class="card-text text-dark text-decoration-none">
                      <p>{{ mb_strimwidth($movie->sinopsis, 0, 150, '...') }}</p>
                    </a>
                    <div class="m-2">
                      @foreach ($movie_genres::where('movie_id', $movie->id)->get() as $movie_genre)
                          <a href="/genre/{{ $genre::find($movie_genre->genre_id)->genre }}" class="btn btn-danger btn-sm rounded-pill">{{ $genre::find($movie_genre->genre_id)->genre }}</a>
                      @endforeach
                    </div>
                  </div>
              </a>
              </div>
            </div>
          </div>
        </div>
    @endforeach

  </div>
</div>
@endsection