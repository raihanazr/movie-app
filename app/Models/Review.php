<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    
    protected $reviews = [
        [
            'id' => 1,
            'movie' => 'Doraemon',
            'user' => 'Raina',
            'rating' => '8,4/10',
            'date' => 'april 15 2005',
        ],
        [
            'id' => 2,
            'movie' => 'Attack on Titan',
            'user' => 'Hana',
            'rating' => '9,1/10',
            'date' => 'april 07 2013',
        ],
        [
            'id' => 3,
            'movie' => 'Jujutsu Kaisen',
            'user' => 'Aulia',
            'rating' => '8,6/10',
            'date' => 'october 03 2020',
        ],
        [
            'id' => 4,
            'movie' => 'One Piece',
            'user' => 'Destia',
            'rating' => '9/10',
            'date' => 'october 15 1999',
        ],
        [
            'id' => 5,
            'movie' => 'Naruto',
            'user' => 'Leon',
            'rating' => '8,4/10',
            'date' => 'october 22 2000', 
        ],
                   
    ];
    
    public function getAllReview()
    {
        return $this-> reviews;
    }
}
