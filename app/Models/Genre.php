<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    
    protected $genres = [
        [
            'id' => 1,
            'name' => 'Jojo Bizarre Adventure',
            'description' => 'Jojos Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.',
        ],
        [
            'id' => 2,
            'name' => 'Noragami',
            'description' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.',
        ],
        [
            'id' => 3,
            'name' => 'Wind Breaker',
            'description' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.',
        ],
        [
            'id' => 4,
            'name' => 'Doraemon',
            'description' => 'Doraemon is a male robotic earless cat that travels back in time from the 22nd century to aid a preteen boy named Nobita.',
        ],
        [
            'id' => 5,
            'name' => 'Attack on Titan ',
            'description' => 'Set in a post-apocalyptic world where the remains of humanity live behind walls protecting them from giant humanoid Titans.', 
        ],
                   
    ];
    
    public function getAllGenre()
    {
        return $this->genres;
    }
}
