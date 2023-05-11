<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserApiPostController extends Controller
{
       public function index(Request $request)
       {
         dd($request->query);
        //  $data = $request->query;
        //  $yoz = DB::table('users')->insert($data);
        //  dd($data);
        //  if($yoz)
        //  {
        //     return "Yozdi";
        //  }
        //  else{
        //     return "Yozmadi";
        //  }
       }
}
