<?php

use App\Http\Controllers\ProfileController;
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

Route::view('/', 'pages.index')->middleware('auth');

Route::middleware('auth')->group(function(){
    Route::get('/edit-profile', [ProfileController::class, 'index'])->name('edit.profile');
    Route::get('/edit-profile/information', [ProfileController::class, 'updateInformation'])->name('edit.profile.info');
    Route::get('/edit-profile/password', [ProfileController::class, 'updatePass'])->name('edit.profile.pass');
    Route::post('/edit-profile/update-pic/{id}', [ProfileController::class, 'updatePic'])->name('update-picture');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('pages.index');
})->name('dashboard');
