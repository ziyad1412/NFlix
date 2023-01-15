<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Movie_genre;
use App\Models\Genre;
use App\Models\Status;
use App\Models\Type;
use App\Models\Videolink;
use App\Models\Visitor;
use App\Http\Resources\MovieResource;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use DB;

class MovieController extends Controller
{
    public function index(){
        $visitor = 0;

        foreach(Visitor::all() as $visit){
            $visitor += $visit->sum;
        }
        return new MovieResource(true,'Data Movie' ,[
            'title' => 'Dashboard',
            'movie' => Movie::all()->count(),
            'genre' => Genre::all()->count(),
            'episode' => Videolink::all()->count(),
            'visitor' => $visitor
        ] );
    }
        //return new MovieResource(true, 'Data Movie', $movie);  
    
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
            return new MovieResource(true, 'Detail Movie',[
                'title' => "Detail Movie $movie->judul",
                'movie' => $movie,
                'visitor' => $visitor,
            ]);
        }
    
        public function create(Request $request){
            $input = $request->validate([
                'judul' => 'required',
                'sinopsis' => 'required',
                'rating' => 'required',
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
                return new MovieResource (true, 'Data berhasil ditambahkan!',$input);
            } else{
                return response()->json($input->errors(),422);//(, 'Data gagal ditambahkan!');
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
                return new MovieResource(true, 'Data berhasil di edit!', $movie_input);
            }
            else{
                return response()->json($input->errors(),422);//('jsAlert', 'Data gagal di edit!');
            }
        }
        public function destroy_movie($id){
            $movie = Movie::find($id);
    
            if($movie){
                $destroy = $movie->delete();
                if($destroy){
                    return new MovieResource(true, 'Data berhasil dihapus!', $movie);
                } else{
                    return response()->json($movie->errors(),422);
                }
            }else{
                return redirect()->back()->with('jsAlert', 'Data tidak ditemukan!');
            }
        }
}
