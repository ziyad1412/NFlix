<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    # relasi ke model genre
    public function genre(){
        return $this->belongsToMany(Genre::class, 'movie_genres');
    }

    # relasi ke model status
    public function status(){
        return $this->belongsTo(Status::class);
    }

    # relasi ke model type
    public function type(){
        return $this->belongsTo(Type::class);
    }

    # relasi ke videolink
    public function videolink(){
        return $this->hasMany(Videolink::class);
    }

    # relasi ke visitor
    public function visitor(){
        return $this->hasOne(Visitor::class);
    }

    # relasi ke rating
    public function rating(){
        return $this->hasMany(Rating::class);
    }
}
