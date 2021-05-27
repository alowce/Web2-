<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutorialController;
use App\Http\Controllers\StageController;

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


Route::post('/tutorial/store', [TutorialController::class, 'store'])->middleware(['auth'])->name('create_tutorial');

Route::get('/tutorial/show', [TutorialController::class, 'show'])->middleware(['auth'])->name('show_tutorial');


Route::post('/stage/store', [StageController::class, 'store'])->middleware(['auth'])->name('create_stage');

require __DIR__.'/auth.php';  
