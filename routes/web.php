<?php


use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\Guest\MainController;
use App\Http\Controllers\Guest\BookController;

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

Route::get('/', [MainController::class, 'index'])
        ->name('home');

// ----------------------------------------------

// /comics/X
Route::get('/comics/{index}', [MainController::class, 'singleComic'])
        ->name('comics-show');

// /comics?index=X
// Route::get('/comics', function () {
//     $comicIndex = $_GET['index'];

//     $comics = config('comics');

//     $comic = $comics[$comicIndex];

//     // dd($comics[$comicIndex]);

//     return view('show-comic', compact('comic'));
// })->name('comics-show');

// ----------------------------------------------

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');