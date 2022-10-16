<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function takeoff() {
        $usr = User::orderBy('id')->get();
        return view('users.index', ['users'=>$usr]);
    }
}
