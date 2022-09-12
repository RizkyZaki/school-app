<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ClientController::class, 'index']);
Route::get('/detail/{materi}', [ClientController::class, 'detail']);
Route::get('/materi/mapel/{id}', [ClientController::class, 'mapels']);
Route::get('/materi/kelas/{id}', [ClientController::class, 'kelass']);
Route::get('/listMateri', [ClientController::class, 'allMateri']);
Route::get('/listKelas', [ClientController::class, 'allKelas']);
Route::get('/listMapel', [ClientController::class, 'allMapel']);
Route::get('/about', [ClientController::class, 'about']);
Route::get('/contact', [ClientController::class, 'contact']);


Route::get('/home', [DashboardController::class, 'home'])->middleware('auth');

Route::resource('mapel', MapelController::class)->middleware(['auth', 'admin']);

Route::resource('kelas', KelasController::class)->middleware(['auth', 'admin']);

Route::resource('materi', MateriController::class)->middleware('auth');

Route::controller(GuruController::class)->group(function () {
    Route::get('guru', 'index')->middleware('auth');
    Route::get('guru/create', 'create')->middleware('auth');
    Route::post('guru/create', 'store');
    Route::get('guru/{id}', 'edit');
    Route::put('guru/{id}', 'update');
    Route::delete('guru/{id}', 'destroy');
});

Route::controller(UserController::class)->group(function () {
    Route::get('register', 'index')->middleware('guest');
    Route::post('register', 'store');
    Route::get('login', 'login')->name('login')->middleware('guest');
    Route::post('login', 'authenticate');
    Route::post('logout', 'logout');
});
