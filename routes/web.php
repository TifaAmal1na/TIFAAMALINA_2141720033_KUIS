<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsheetTifa;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/posts', [JobsheetTifa::class, 'index']);

Route::get('/', function(){
    return view('home');
});

Route::get('/home', function(){
    return view('home');
});

Route::get('/profile/{name}', function(string $name){
    return view('profile', array( 'name' => $name ));
});

Route::get('/pengalaman-kuliah', function(){
    return view('pengalamankuliah');
});