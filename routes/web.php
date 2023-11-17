<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
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

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/creer', [CategoryController::class, 'create']);


// {friend} = Paramètre obligatoire
// {friend?} = Paramètre optionnel

// dump($friend);
//dump($_GET); // Interdit avec Laravel
//dump($request->color); // $_GET['color'] ?? null;