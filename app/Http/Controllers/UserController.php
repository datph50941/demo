<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function listUser(){
      $listUser=DB::table('users')
      ->join('phongban','users.phongban_id','=','phongban.id')
      ->select('users.id','users.name','users.email','users.phongban_id','phongban.ten_donvi')
      ->get();
      return view('users/listUsers')->with('listUser',$listUser);
    }
}
