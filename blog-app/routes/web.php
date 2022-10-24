<?php
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BlogController;
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

//using closures
// Route::get('/', function () {
//     return view('welcome');
// });


//using controllers

//to welcome page
Route::get('/',[WelcomeController::class, 'index']);

//to blog page
Route::get('/blog',[BlogController::class,'index']);


