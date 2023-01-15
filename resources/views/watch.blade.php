@extends('main')

@section('content')
    <div class="px-3">
        <a href="/detail/{{ $movie->id }}/back" class="btn btn-danger"><- Kembali ke detail</a>
    </div>
    <div>
        <h4 class="text-center py-3">Nonton Movie {{ $movie->judul }}</h4>
    </div>
    <div class="container d-flex justify-content-center">
        <iframe src="{{ $videolink->link }}" width="700" height="394" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>    
    </div>
    <div class="container mt-5 mb-4 d-flex justify-content-center">
        @if ($videolink->episode != 1)
            <a href="/watch/{{ $movie->id }}/{{ $prev->id }}" class="btn btn-danger mx-3">< Episode Sebelumnya</a>
        @endif
        @if ($last_episode != $videolink->episode)
            <a href="/watch/{{ $movie->id }}/{{ $next->id }}" class="btn btn-danger mx-3">Episode Selanjutnya ></a>
        @endif
    </div>
@endsection