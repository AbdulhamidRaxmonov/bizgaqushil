<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CreateGroupController extends Controller
{
    public function index(Request $request){
        //  dd($request->all());
        
        $data = [
            "topic"=> $request->topic,
            "people"=> $request->people,
            "lang"=> $request->lang,
            "level"=> $request->level,
        ];

        $yoz = DB::table('creategroup')->insert($data);
        $base = DB::table('creategroup')->get();
        

        return view('firstpage',compact('base'));
    }
}
