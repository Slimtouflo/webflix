<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        return view ('movies/index', [
            'movies' => Movie::all(),
        ]);
    }

    public function show($id)
    {
        $movie = Movie::findorfail($id);

        return view('movies/movie-show', ['movie' => $movie]);
    }

    public function create()
    {
        return view('movies/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|unique:movies|min:3',
            'synopsys'    => 'required|min:10',
            'duration'    => 'required|min:0',
            'youtube'     => '',
            'cover'       => '',
            'released_at' => 'date',
        ]);

        $movie = new Movie();
        $movie->title = $request->title;
        $movie->synopsys = $request->synopsys;
        $movie->duration = $request->duration;
        $movie->youtube = $request->youtube;
        $movie->cover = $request->cover;
        $movie->released_at = $request->released_at;
        $movie->save();

        return redirect('/films');
    }
}
