<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
// Route::get('/users', function () {
//     $users = DB::table('users')->get();
//     return view('users', compact('users'));
// });
// Route::get('/users', 'UserController@index');
Route::get('/users', [UserController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});
