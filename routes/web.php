<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/fiorella/{friend?}', [HomeController::class, 'friend']);

Route::get('/a-propos', [AboutController::class, 'index']);
Route::get('/a-propos/{user}', [AboutController::class, 'show']);

// CRUD categories
Route::get('/categories', [CategoryController::class, 'index']);
// Afficher le form
Route::get('/categories/creer', [CategoryController::class, 'create']);
// Traiter le form
Route::post('/categories/creer', [CategoryController::class, 'store']);

Route::get('/films', [MovieController::class, 'index']);
Route::get('/films/creer', [MovieController::class, 'create']);
Route::post('/films/creer', [MovieController::class, 'store']);
Route::get('/films/{id}', [MovieController::class, 'show']);
Route::get('/film/{id}/modifier', [MovieController::class, 'edit']);
Route::post('/film/{id}/modifier', [MovieController::class, 'update']);
Route::get('/film/{id}/supprimer', [MovieController::class, 'destroy']);



// {friend} = Paramètre obligatoire
// {friend?} = Paramètre optionnel

// dump($friend);
//dump($_GET); // Interdit avec Laravel
//dump($request->color); // $_GET['color'] ?? null;