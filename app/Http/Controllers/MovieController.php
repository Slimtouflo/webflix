<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        return view ('movies/index', [
            'movies' => Movie::with('category')->get(),
        ]);
    }

    public function show($id)
    {
        $movie = Movie::findorfail($id);

        return view('movies/movie-show', ['movie' => $movie]);
    }

    public function create()
    {
        return view('movies/create', [
            'categories' => Category::all()->sortBy('name'),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|min:3',
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
        $movie->category_id = $request->category_id;
        $movie->save();

        return redirect('/films');
    }

    public function edit($id)
    {
        $movie = Movie::findOrFail($id);

        return view('movies/edit', [
            'categories' => Category::all()->sortBy('name'),
            'movie' => $movie,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'       => 'required|min:3',
            'synopsys'    => 'required|min:10',
            'duration'    => 'required|min:0',
            'youtube'     => 'nullable|string',
            'cover'       => '',
            'released_at' => 'date',
        ]);

        $movie = Movie::findOrFail($id);
        $movie->title = $request->title;
        $movie->synopsys = $request->synopsys;
        $movie->duration = $request->duration;
        $movie->youtube = $request->youtube;
        // $movie->cover = $request->cover;
        $movie->released_at = $request->released_at;
        $movie->category_id = $request->category_id;
        $movie->save();

        return redirect('/films');
    }
}
