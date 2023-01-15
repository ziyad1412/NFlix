<?php

namespace Database\Seeders;

use App\Models\Rating;
use Illuminate\Database\Seeder;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rating::create([
            'movie_id' => 1,
            'score' => 8.35
        ]);

        Rating::create([
            'movie_id' => 2,
            'score' => 7.09
        ]);
        
        Rating::create([
            'movie_id' => 3,
            'score' => 8.35
        ]);

        Rating::create([
            'movie_id' => 4,
            'score' => 8.35
        ]);

        Rating::create([
            'movie_id' => 5,
            'score' => 8.35
        ]);

        Rating::create([
            'movie_id' => 6,
            'score' => 8.35
        ]);

        Rating::create([
            'movie_id' => 7,
            'score' => 8.35
        ]);

        Rating::create([
            'movie_id' => 8,
            'score' => 8.35
        ]);

        Rating::create([
            'movie_id' => 9,
            'score' => 8.35
        ]);

        Rating::create([
            'movie_id' => 10,
            'score' => 8.35
        ]);

        Rating::create([
            'movie_id' => 11,
            'score' => 8.35
        ]);

        Rating::create([
            'movie_id' => 12,
            'score' => 8.35
        ]);

        Rating::create([
            'movie_id' => 13,
            'score' => 8.35
        ]);

        Rating::create([
            'movie_id' => 14,
            'score' => 8.35
        ]);

        Rating::create([
            'movie_id' => 15,
            'score' => 8.35
        ]);

        Rating::create([
            'movie_id' => 16,
            'score' => 8.35
        ]);

        Rating::create([
            'movie_id' => 17,
            'score' => 8.35
        ]);

        Rating::create([
            'movie_id' => 18,
            'score' => 8.35
        ]);

        Rating::create([
            'movie_id' => 19,
            'score' => 8.35
        ]);

        Rating::create([
            'movie_id' => 20,
            'score' => 8.35
        ]);

        Rating::create([
            'movie_id' => 21,
            'score' => 8.75
        ]);

        Rating::create([
            'movie_id' => 22,
            'score' => 8.85
        ]);
        Rating::create([
            'movie_id' => 23,
            'score' => 8.35
        ]);
        Rating::create([
            'movie_id' => 24,
            'score' => 8.05
        ]);
        Rating::create([
            'movie_id' => 25,
            'score' => 8.35
        ]);
        Rating::create([
            'movie_id' => 26,
            'score' => 8.05
        ]);
    }
}
