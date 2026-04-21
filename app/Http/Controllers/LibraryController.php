<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Author;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        $authors = Author::all();

        return view('library', compact('genres', 'authors'));
    }
}