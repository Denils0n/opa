<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\PrestadorController;
use App\Models\Prestador;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::resource('/prestador', PrestadorController::class);
Route::post('/add-animal', [AnimalController::class, 'store']);
Route::delete('/apagar-animal/{id}', [AnimalController::class, 'destroy']);
Route::get('/editar-animal/{id}', [AnimalController::class, 'edit']);
Route::put('/update-animal/{id}',[AnimalController::class, 'update']);
Route::get('/add-prestador',[PrestadorCcontroller::class,'store']);
Route::get('/editar-prestador/{id}',[PrestadorCcontroller::class,'edit']);

require __DIR__.'/auth.php';

