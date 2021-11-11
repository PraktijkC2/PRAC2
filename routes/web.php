<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DrankenController;
use App\Http\Controllers\SongsController;
use App\Http\Controllers\BoekenController;
use App\Http\Controllers\ActorsController;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\GereedschapController;
use App\Http\Controllers\InformatieController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\StakeholdersController;

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

Route::get('/', function () { return view('home'); });

Route::middleware('auth')->group(function(){
    Route::get('/library', [LibraryController::class, 'index'])->name('library.index');
    Route::get('/informatie', [InformatieController::class, 'index'])->name('informatie.index');
    Route::get('/stakeholders', [StakeholdersController::class, 'index'])->name('stakeholders.index');

    Route::get('/songs', [SongsController::class, 'index'])->name('songs');
    Route::get('/songs/{songs}', [SongsController::class, 'listSong'])->name('songs.index');

    Route::get('/books', [BoekenController::class, 'index'])->name('books');
    Route::get('/books/{book}', [BoekenController::class, 'listBoek'])->name('books.index');

    Route::get('/actors', [ActorsController::class, 'index'])->name('actors');
    Route::get('/actors/{actor}', [ActorsController::class, 'listActor'])->name('actors.index');

    Route::get('/films', [FilmsController::class, 'index'])->name('films');
    Route::get('/films/{film}', [FilmsController::class, 'listFilm'])->name('films.index');

    Route::get('/gereedschap', [GereedschapController::class, 'index'])->name('gereedschap');
    Route::get('/gereedschap/{gereedschap}', [GereedschapController::class, 'listGereedschap'])->name('gereedschap.index');

    Route::get('/dranken', [DrankenController::class, 'index'])->name('dranken');
    Route::get('/dranken/{dranken}', [DrankenController::class, 'listDranken'])->name('dranken.index');

    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
});

require __DIR__.'/auth.php';
