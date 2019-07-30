@extends('frontend.main')


@section('content')
<br>
<br>
<br>
    <div class="container">
            <div  id="carda">
                    <div class="row">
                     <h3>{{$categorynames->categoryname}}   </h3>    
                  </div><br>
            </div>
            <div class="container">
                    <div class="row">
                     
                      @foreach ($moviename as $item)
                     
                  <div class="col-md-4">
                     
                         
                     
                         
                                    <a href="{{url('playmovie',$item->id)}}">
                                 
                         <div class="row">
                         <img src="{{url('image/'.$item->imagename)}}" style="background-image: url('{{'image/'.$item->imagename}}')" id="aa" class="imagesize">
                            {{-- <div class="row" id="aa" style="background-image: asset('{{'image/'.$item->imagename}}')">                            --}}
                         </div> 
                        
                       </a>
                       
                    <div class="row" id="textcolor">
                       <div class="col-md-10">
                      {{$item->moviename}}<br>
                      {{$item->actorname}}<br>
                    
                                          
                         @foreach ($category as $idname)
                             
                                  
                      @if ($item->cid == $idname->id)
                      {{$item->categoryname}}
                          
                     
                          
                      @endif
                      @endforeach   
                   
                       </div>
                      </div><br><br>
                  </div>
                  @endforeach  
                      
                           
                   </div> 
                   
                    </div>
                            
                    <span>{{$moviename->links()}}</span>             
                         
@endsection