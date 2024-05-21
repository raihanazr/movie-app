<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genreModel = new Genre();
        $genres = $genreModel->getAllGenre();

        return view('genre', ['genres' => $genres]);
    }
}
