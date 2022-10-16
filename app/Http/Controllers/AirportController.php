<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AirportController extends Controller
{
    public function takeoff() {
        return view('pages.index');
    }
}
