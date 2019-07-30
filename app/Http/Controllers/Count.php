<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\movies;
use DB;
class Count extends Controller
{
    public function store (Request $request){
       $count = DB::table('movies')->increment('count',1);
      

    }
}
