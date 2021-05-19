<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProdutoController;

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

Route::get('/q', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('site.contauser.cart');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [SiteController::class, 'index']);
Route::get('/dashboard', [SiteController::class, 'userconta'])->middleware(['auth'])->name('dashboard');;
Route::get('/checkout', [SiteController::class, 'checkout'])->middleware(['auth'])->name('checkout');
Route::resource('blog', BlogController::class);
Route::resource('catalogo', ProdutoController::class);