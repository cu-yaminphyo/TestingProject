<?php

namespace App\Http\Controllers;
use App\movies;
use App\categories;
use DB;
use Illuminate\Http\Request;

class AllController extends Controller
{
    
   
    public function playmovie($id){

      $id = DB::table('movies')->find($id);
      $category = DB::table('categories') ->select('*')->get();

      return view('frontend.playmovie',compact('id','category'));

    }

public function showall($id){

    $categorynames = DB::table('categories')->find($id);
    $category = DB::table('categories') ->select('*')->get();
    $moviesid = DB::table('movies')->select('cid')->where('movies.cid','=',$id)->pluck('cid');
    $movieid = $moviesid[0];
    $moviename = DB::table('movies')
    ->join('categories','movies.cid','=','categories.id')
    ->select('movies.*','categories.categoryname')
    ->where('movies.cid','=',$movieid)->paginate(5);

      return view('frontend.showall',compact('category','categorynames','moviename'));
   
   }
  
   public function search(Request $request){
  
      $search = $request->get('search');
      $catname=categories::select('categoryname');
      $link=movies::where('moviename','like','%'.$search.'%')->get();
      $name=movies::where('actorname','like','%'.$search.'%')->get();
      $random= DB::table('categories')->select('id', 'categoryname')->get();
      $category = DB::table('categories') ->select('*')->get();
     
      return view('frontend.search',compact('catname','link','name','search','category','random'));
     
   }  
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $link=DB::table('movies')->orderBy(DB::raw('RAND()'))->paginate(12);
        $random= DB::table('categories')->select('id', 'categoryname')->get();
        $table = categories::all();
        $category = DB::table('categories')
        ->select('*')->get();

        return view('frontend.mainpage',compact('link','random','table','category'));
    
    }

  
   
   public function about(){

        $category = DB::table('categories') ->select('*')->get();
        return view('frontend.about',compact('category'));
    }
  
}
