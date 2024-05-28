<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Shounen',
            'description' => 'Shōnen manga is an editorial category of Japanese comics targeting an audience of adolescent boys.',
        ]);
    
        Genre::create([
            'name' => 'Drama',
            'description' => 'Drama is a captivating literary genre that is brought to life through performance.',
        ]);
    
        Genre::create([
            'name' => 'Action',
            'description' => 'Books in the action genre usually put more emphasis on exciting action sequences than deep themes and character development.',
        ]);
        Genre::create([
            'name' => 'Adventure',
            'description' => 'involve protagonists going on epic journeys.',
        ]);
        Genre::create([
            'name' => 'Horor',
            'description' => 'Horror film is a film genre that presents things that are frightening, tense, and horrifying.',
        ]);
    }
}
