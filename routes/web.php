<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=> 'users'], function () {
  Route::get('list-users',[UserController::class,'listUser']);
});

//http://127.0.0.1:8000/users/create-users
//http://127.0.0.1:8000/users/update-usersx`
//http://127.0.0.1:8000/users/delete-users
//http://127.0.0.1:8000/users/list-users
//http://127.0.0.1:8000/users/detail-users