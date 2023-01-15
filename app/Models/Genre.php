<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Genre extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    # relasi ke model movie
    public function movie(){
        return $this->hasMany(Movie::class, 'movie_genres');
    }
}
