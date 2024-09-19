<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\lecturerController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/lecturers',[lecturerController::class, 'index']);
Route::post('/lecturers/insert',[lecturerController::class, 'insert']);
Route::get('/lecturer/delete{lec_id}',[lecturerController::class, 'delete']);
