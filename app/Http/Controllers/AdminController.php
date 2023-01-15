<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Movie_genre;
use App\Models\Genre;
use App\Models\Rating;
use App\Models\Status;
use App\Models\Type;
use App\Models\Videolink;
use App\Models\Visitor;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class AdminController extends Controller
{
    public function index(){
        $visitor = 0;

        foreach(Visitor::all() as $visit){
            $visitor += $visit->sum;
        }
        return view('admin.content.dashboard', [
            'title' => 'Dashboard',
            'movie' => Movie::all()->count(),
            'genre' => Genre::all()->count(),
            'episode' => Videolink::all()->count(),
            'visitor' => $visitor
        ]);
    }

    public function movie(){
        return view('admin.content.movie', [
            'title' => 'Manage Data Movie',
            'movies' => Movie::all()
        ]);
    }

    public function add(){
        $genre = Genre::all();
        $status = Status::all();
        $types = Type::all();
        $ratings = Rating::all();

        return view('admin.form', [
            'title'=> 'Tambah Movie',
            'genres' => $genre,
            'statuses' => $status,
            'types' => $types,
            'ratings' => $ratings,
            'action' => '/create'
        ]);
    }

    public function create(Request $request){
        $input = $request->validate([
            'judul' => 'required',
            'sinopsis' => 'required',
            'cover_img' => 'required|url',
            'status_id' => 'required|numeric',
            'type_id' => 'required|numeric'
        ]);
        
        $create = Movie::create($input);
        $id = $create->id;
        foreach($request->genre_id as $id_genre){
            $movie_genre_input = [
                'genre_id' => $id_genre,
                'movie_id' => $id
            ];
            $genre_store = Movie_genre::create($movie_genre_input);
        }

        if($create && $genre_store){
            return redirect('/admin/movie')->with('jsAlert', 'Data berhasil ditambahkan!');
        } else{
            return redirect('/admin/movie')->with('jsAlert', 'Data gagal ditambahkan!');
        }
    }

    public function edit_movie($id){
        $genre = Genre::all();
        $status = Status::all();
        $types = Type::all();

        return view('admin.form', [
            'title'=> 'Edit movie',
            'genres' => $genre,
            'statuses' => $status,
            'types' => $types,
            'movie' => Movie::find($id),
            'action' => "/movie/edit/$id"
        ]);
    }

    public function destroy_movie($id){
        $movie = Movie::find($id);

        if($movie){
            $destroy = $movie->delete();
            if($destroy){
                return redirect()->back()->with('jsAlert', 'Data berhasil dihapus!');
            } else{
                return redirect()->back()->with('jsAlert', 'Data gagal dihapus!');
            }
        }else{
            return redirect()->back()->with('jsAlert', 'Data tidak ditemukan!');
        }
    }

    public function store_movie($id, Request $request){
        $movie_input = [
            'judul' => $request->judul,
            'sinopsis' => $request->sinopsis,
            'rating' => $request->rating,
            'cover_img' => $request->cover_img,
            'status_id' => $request->status_id,
            'type_id' => $request->type_id,
        ];
        foreach($request->genre_id as $id_genre){
            $movie_genre_input = [
                'genre_id' => $id_genre,
                'movie_id' => $id
            ];
            $genre_store = Movie_genre::where('movie_id', $id)->first()->update($movie_genre_input);
        }

        $movie_store = Movie::find($id)->update($movie_input);

        if($genre_store && $movie_store){
            return redirect('/admin/movie')->with('jsAlert', 'Data berhasil di edit!');
        }
        else{
            return redirect('/admin/movie')->with('jsAlert', 'Data gagal di edit!');
        }
    }
}
