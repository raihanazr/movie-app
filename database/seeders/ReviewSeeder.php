<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'id' => '1',
            'movie' => 'Doraemon',
            'user' => 'raina',
            'rating' => '8,4/10',
            'date' => '19-10-2002'
        ]);
        Review::create([
            'id' => '2',
            'movie' => 'Attack on titan',
            'user' => 'hana',
            'rating' => '9/10',
            'date' => '07-06-1999'
        ]);
        Review::create([
            'id' => '3',
            'movie' => 'Jujutsu Kaisen',
            'user' => 'aulia',
            'rating' => '8/10',
            'date' => '03-05-2019'
        ]);
        Review::create([
            'id' => '4',
            'movie' => 'One Piece',
            'user' => 'lia',
            'rating' => '9/10',
            'date' => '10-04-1999'
        ]);
        Review::create([
            'id' => '5',
            'movie' => 'Naruto',
            'user' => 'leon',
            'rating' => '9/10',
            'date' => '25-02-1999'
        ]);
        
    }
}
