<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Movie_genre;
use App\Models\Genre;
use App\Models\Status;
use App\Models\Type;
use App\Models\Videolink;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Mockery\Matcher\Any;

class MovieController extends Controller
{
    public function index(){
        $populars = Visitor::limit(6)->orderByDesc('sum')->get();
        $movies = [];
        foreach($populars as $popular){
            array_push($movies, $popular->movie);
        }
        $ongoing = Movie::where('status_id', 1)->get();
        return view('home', [
            'title' => 'Home',
            'movies' => $movies,
            'ongoing' => $ongoing,
            'film' => Movie::where('type_id', '1')->latest("id")->get(),
            'genre' => Genre::class,
            'movie_genres' => Movie_genre::class
        ]);
    }

    public function detail($id){
        $movie = Movie::find($id);
        $visitor = Visitor::firstOrCreate(
            ['movie_id'=> $id], 
            ['sum'=>0]
        );
        $visitor->update([
            'movie_id' => $id,
            'sum' => $visitor->sum+1
        ]);
        return view('detail', [
            'title' => "Detail Movie $movie->judul",
            'movie' => $movie,
            'visitor' => $visitor,
            'is_watched' => false
        ]);
    }

    public function detail_after_watch($id){
        $movie = Movie::find($id);
        $visitor = Visitor::firstOrCreate(
            ['movie_id'=> $id], 
            ['sum'=>0]
        );
        $visitor->update([
            'movie_id' => $id,
            'sum' => $visitor->sum+1
        ]);
        return view('detail', [
            'title' => "Detail Movie $movie->judul",
            'movie' => $movie,
            'visitor' => $visitor,
            'is_watched' => true
        ]);
    }

    public function watch($movie_id, $videolink_id){
        $movie = Movie::find($movie_id);
        $last_episode = Videolink::where('movie_id', $movie_id)->max('episode');
        $videolink = Videolink::find($videolink_id);
        return view('watch',[
            'title' => "Nonton $movie->judul episode $videolink->episode",
            'movie' => $movie,
            'videolink' => $videolink,
            'last_episode' => $last_episode,
            'next' => Videolink::where('movie_id', $movie_id)->where('episode', $videolink->episode+1)->first(),
            'prev' => Videolink::where('movie_id', $movie_id)->where('episode', $videolink->episode-1)->first()
        ]);
    }

    public function search(Request $request){
        $results = Movie::where('judul','like', "%$request->search%")->get();

        return view('search', [
            'title' => 'Hasil Pencarian',
            'results' => $results,
            'search' => $request->search
        ]);
    }

    public function show_by_genre($genre){
        $results = [];
        $genre_id = Genre::where('genre', $genre)->first()->id;
        $movie_genres = Movie_genre::where('genre_id', $genre_id)->get();
        foreach($movie_genres as $movie_genre){
            array_push($results, Movie::find($movie_genre->movie_id));
        }

        return view('search', [
            'title' => "Kategori",
            'results' => $results,
            'search' => $genre,
        ]);
    }

    public function show_by_status($status){
        $status_id = Status::where('status', $status)->first()->id;
        $results = Movie::where('status_id', $status_id)->get();
        return view('search', [
            'title' => $status,
            'results' => $results,
            'search' => 'Movie'
        ]);
    }

    public function show_by_type($type){
        $type_id = Type::where('type', $type)->first()->id;
        $results = Movie::where('type_id', $type_id)->get();
        return view('search', [
            'title' => $type,
            'results' => $results,
            'search' => 'Movie'
        ]);
    }

    public function about(){
        return view('about', [
            'title' => 'About Us',
        ]);
    }

    public function list_movie(){
        return view('list_movie', [
            'title' => 'List Movie',
            'movies' => Movie::all(),
        ]);
    }

    public function list_genre(){
        return view('genre', [
            'title' => 'Genre List',
            'genres' => Genre::all(),
        ]);
    }

}
