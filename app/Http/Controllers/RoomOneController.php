<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomOneController extends Controller
{
    public function index(){
        return view('roomone');
    }
}
