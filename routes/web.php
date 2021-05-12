<?php

use App\Http\Controllers\Profile\PersonalController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('clearcache', function () {
    Artisan::call('optimize:clear');
    return view('welcome');
});
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::group(["prefix" => "profile", "middleware" => "auth"], function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    Route::get("/personal", [PersonalController::class, 'index'])->name("personal");
});

require __DIR__ . '/auth.php';
