<?php

use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [ProductController::class, 'index']);
Route::get('/create/product', [ProductController::class, 'create'])->middleware('auth');
Route::get('/produto-detalhes/{id}', [ProductController::class, 'show']);
Route::post('/create', [ProductController::class, 'store'])->middleware('auth');
Route::post('/newsletter', [NewsletterController::class, 'newsletter']);
Route::delete('/product/{id}', [ProductController::class, 'destroy']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
