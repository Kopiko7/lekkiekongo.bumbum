<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::view('bls', 'forms.form');
Route::get('Validate', [\App\Http\Controllers\Validate::class, 'show']);

Route::get('ostraPakerniaBaz',[\App\Http\Controllers\ostraPakerniaBaz::class, 'show']);

// Route::post('AddUserController', []);

Route::get('showfakeuser',[App\Http\Controllers\CreateFakeData::class, 'Show']);