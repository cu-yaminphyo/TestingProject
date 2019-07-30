<?php

namespace App\Http\Controllers;
use App\movies;
use App\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use phpDocumentor\Reflection\Types\Null_;

class AdminController extends Controller


{ public function admin(Request $request)
    
    {
        if(Auth::user()->isAdministrator()){
            return view('welcome');
        }


    }
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $contacts = movies::all();
        $cate = categories::all();

        return view('backend.index', compact('contacts','cate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $table = categories::all();
        
        return view('backend.create',compact('table'));
        // return view('backend.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           // 'cid'=>'required',
            'moviename'=>'required',
            'actorname'=>'required',
            'link'=>'required',
            'review'=>'required',
            // 'imagename' => 'required|mimes:jpeg,png,JPG,JPEG,jpg,gif,svg|max:2048',
        ]);

     $cates = categories::all();
     $value = $request->categoryname;

         foreach($cates as $item)
            if($item->categoryname == $value){
                $cover = $request->file('imagename');
                $extension = $cover->getClientOriginalExtension();
                // Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));        
                request()->imagename->move(public_path('image'), $cover->getClientOriginalName());
                $movies = new Movies();
                $movies->cid = $item->id;
                $movies->moviename = $request->get('moviename');
                $movies->actorname = $request->get('actorname');
                $movies->mime = $cover->getClientMimeType();
                $movies->original_filename = $cover->getClientOriginalName();
                $movies->imagename = $cover->getClientOriginalName();
                $movies->link      = $request->get('link');
                $movies->review    = $request->get('review');
               
                 $movies->save();
                
                     
                   
                 }
            

            return redirect('/backend')->with('success', 'Contact saved!');

        
    }
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = movies::find($id);
        $table = categories::all();
        
        return view('backend.edit', compact('contact','table'));     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $request->validate([
            'cid'=>'required',
            'moviename'=>'required',
            'actorname'=>'required',
            // 'imagename'=>'required',
            'link'=>'required',
            'review'=>'required',

        ]);

       
        $contact = movies::find($id);
           
        $contact->cid =  $request->get('cid');
        $contact->moviename = $request->get('moviename');
        $contact->actorname = $request->get('actorname');
        $contact->link = $request->get('link');
        $contact->review = $request->get('review');
       
            if($request->hasfile('imagename'))
        {
        $image= $request->file('imagename');
        $extension = $image->getClientOriginalName();
        request()->imagename->move(public_path('image'), $image->getClientOriginalName());
        $contact->mime = $image->getClientMimeType();
        $contact->original_filename = $image->getClientOriginalName();
        $contact->imagename = $image->getClientOriginalName();

//    $filename = time(). '.' . $extension;
//    $image->move(public_path('image'),$filename);
//    $contact->imagename =$filename;
        }
        
        $contact->save();

         return redirect('/backend')->with('success', 'Contact updated!');     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = movies::find($id);
        $contact->delete();

        return redirect('/backend')->with('success', 'Contact deleted!');
    }
   
}
