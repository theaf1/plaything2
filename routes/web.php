<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Testcontroller;

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
Route::get('/hello',function () {
    return view('hello');
});
Route::get('/boo',function () {
    return view('bootstrap_show');
});
//Route::get('/test','Testcontroller@index');
//Route::post('/add-test',[Testcontroller::class, 'store']);
// Route::get('/test',function () {
//     return view('test');
// });
Route::get('index', [Testcontroller::class, 'index']);
Route::get('test', [Testcontroller::class, 'create']);
Route::post('add-test', [Testcontroller::class, 'store']);