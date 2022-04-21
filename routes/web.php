<?php

use App\Http\Controllers\AstucesController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'index'])->name('profil.index')->middleware('auth');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/politique-de-confidentialite', [HomeController::class, 'politiqueDeConfidentialite'])->name('pdC');

Route::resource('/formation', FormationController::class);
Route::resource('/catalogue', CatalogueController::class);
Route::resource('/astuces', AstucesController::class);
Route::resource('/ebooks', AstucesController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
