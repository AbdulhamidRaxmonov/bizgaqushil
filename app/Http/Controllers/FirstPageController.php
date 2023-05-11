<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FirstPageController extends Controller
{
     public function index(Request $request){
        // dd($request->all());
        $data = [
            "name" => $request->name,
            "lastname" => $request->lastname,
            "email" => $request->email,
            "password" => $request->password,
        ];

        $yoz = DB::table('users')->insert($data);
        return view('firstpage');
     }
}
