<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DrankenController;
use App\Http\Controllers\GereedschapController;
use App\Http\Controllers\InformatieController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\StakeholdersController;
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

Route::get('/', function () { return view('home'); });

Route::get('/library', [LibraryController::class, 'index'])->name('library.index');

Route::get('/informatie', [InformatieController::class, 'index'])->name('informatie.index');

Route::get('/stakeholders', [StakeholdersController::class, 'index'])->name('stakeholders.index');

Route::get('/gereedschap', [GereedschapController::class, 'index'])->name('gereedschap.index');

Route::get('/dranken', [DrankenController::class, 'index'])->name('dranken.index');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');