<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfileController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

/**
 * ==================== NOTES ROUTE ====================
 */

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/notes/dashboard', [NoteController::class, 'dashboard'])->name('notes.dashboard');
    Route::resource('/notes', NoteController::class);
    Route::get('/notes/delete/{note}', [NoteController::class, 'destroy'])->name('notes.delete');

    Route::get('/helloWorldLogin', function () {
        return "Hello World";
    });
});

Route::get('/helloWorld', function () {
    return "Hello World";
});

//same as above
// Route::middleware(['auth'])->group(function () {
//     Route::prefix('notes')->group(function () {
//         Route::controller(NoteController::class)->group(function () {
//             Route::get('/', 'index')->name('notes.index');
//             Route::post('/', 'store')->name('notes.store');
//             Route::get('/create', 'create')->name('notes.create');
//             Route::get('/{id}', 'show')->name('notes.show');
//             Route::put('/{id}', 'update')->name('notes.update');
//             Route::delete('/{id}', 'destroy')->name('notes.destroy');
//             Route::get('/{id}/edit', 'edit')->name('notes.edit');
//         });
//     });
// });
