<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProsController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pros', [ProsController::class, 'index'])->name('pros.index');

Route::get('/pros/create', [ProsController::class, 'create'])->name('pros.create');
Route::post('/pros', [ProsController::class, 'store'])->name('pros.store');