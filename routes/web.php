<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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
use App\Http\Controllers\GameController;
use App\Http\Controllers\CommunityController;
use \App\Models\Community;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [HomeController::class , 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::resource('games', \App\Http\Controllers\GameController::class);

Route::resource('communities', \App\Http\Controllers\CommunityController::class);

Route::post('/communities/new', [CommunityController::class, 'store'])->name('add-community');
Route::get('/communities/delete/{community}', [CommunityController::class, 'destroy'])->name('rm-community');
Route::model('community', Community::class);



require __DIR__.'/auth.php';