<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\UserController;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function xinchao(){
        $title = "Thao Nguyen";
        return view('title') -> with('title', $title);
    }
}
