<?php

namespace Database\Seeders;

use App\Models\Visitor;
use Illuminate\Database\Seeder;

class VisitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Visitor::create([
            'movie_id' => 1,
            'sum' => 1
        ]);
        Visitor::create([
            'movie_id' => 2,
            'sum' => 3
        ]);
        Visitor::create([
            'movie_id' => 3,
            'sum' => 1
        ]);
        Visitor::create([
            'movie_id' => 4,
            'sum' => 2
        ]);
        Visitor::create([
            'movie_id' => 5,
            'sum' => 1
        ]);
        Visitor::create([
            'movie_id' => 6,
            'sum' => 1
        ]);
    }
}
