<?php

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
//     return redirect('/clinica');
// });

// Route::view('/', 'site/camed');
Route::get('/', function () {
    return view('camed'); // 'landing-page' é o nome do seu arquivo blade
});
