<?php

use App\Http\Controllers\PetController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PetController::class, 'getPetList']);

Route::get('/create', [PetController::class, 'petForm']);

Route::get('/{id}', [PetController::class, 'getOnePet']);

Route::post('/create', [PetController::class, 'createPet']);
