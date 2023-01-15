<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create([
            'genre' => 'Action'
        ]);
        Genre::create([
            'genre' => 'Adventure'
        ]);
        Genre::create([
            'genre' => 'Comedy'
        ]);
        Genre::create([
            'genre' => 'Drama'
        ]);
        Genre::create([
            'genre' => 'Horror'
        ]);
        Genre::create([
            'genre' => 'Romance'
        ]);
        Genre::create([
            'genre' => 'Animation'
        ]);
        Genre::create([
            'genre' => 'Thriller'
        ]);
    }
}
