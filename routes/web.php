<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\SumController;
// use App\Http\Controllers\SignupController;
// use App\Http\Controllers\RoomController;
// use App\Http\Controllers\PageController;
use App\Http\Controllers\createTable;



/* |-------------------------------------------------------------------------- | Web Routes |-------------------------------------------------------------------------- | | Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider within a group which | contains the "web" middleware group. Now create something great! | */

Route::get('/', function () {
    return view('welcome');
});
//Thuc hien duong dan de chay controller
// Route::get('test', [UserController::class , 'xinchao']);
// Route::get('sum', [SumController::class , 'GetValue']);
// Route::post('sum', [SumController::class , 'Result']);
// Route::get('Signup', [SignupController::class , 'index']);
// Route::post('Signup', [SignupController::class , 'displayInfor']);
// Route::get('addRoom', [RoomController::class , 'index']);
// Route::post('addRoom', [RoomController::class , 'addRoom']);
// Route::get('home', [PageController::class , 'getIndex']);
// Route::get('home', [PageController::class , 'getProductType']);



Route::get('/', [createTable::class , 'createTable']);


