<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // return Category::all(); // SELECT * FROM categories

        return view('categories/index', [
            'categories' => Category::all(),
        ]);
    }

    public function create()
    {
        return view('categories/create');
    }

    public function store(Request $request)
    {
        // Validation du champ name. Si aucune erreur, on va dans le save
        // S'il y a une erreur, Laravel renvoie vers le form avec les erreurs
        $request->validate([
            'name' => 'required|min:3|unique:categories|max:10|between:3,10',
        ]);

        // Insertion en BDD
        $category = new Category();
        $category->name = $request->name;
        $category->save(); // INSERT INTO en Laravel

        return redirect('/categories');
    }
}
