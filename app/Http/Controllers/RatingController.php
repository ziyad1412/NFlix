<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    function create(Request $request){
        $create = Rating::create([
            'score' => $request->score,
            'movie_id' => $request->movie_id
        ]);

        if($create){
            return back()->with('jsAlert', 'Rating berhasil terkirim');
        } else{
            return back()->with('jsAlert', 'Rating gagal terkirim');
        }
    }
}
