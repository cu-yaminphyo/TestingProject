@extends('frontend.main')
@section('content') 
<br>
<br>
<br>
<div class="container-fruid">
  
  <div  id="carda">
      <div class="card-body">
       <h3> ဇာတ်လမ်းနာမည်ဖြင့်ရှာဖွေထားသောဇာတ်လမ်းများ </h3>   
        </div>
    </div><br>
</div>
<div class="container">
  
        <div class="row">

          
          @if ($link->count()>0)
          @foreach ($link as $item)
           
                 
            
       <div class="col-md-4">
          <a href="{{url('playmovie',$item->id)}}">
              <div class="row" id="aa" style="background-image: url('{{'image/'.$item->imagename}}')">
                  </div>
           
            </a>
            <div class="row" id="textcolor">
               <div class="col-md-12">
                    <div class="row">

                    
                        <div class="col-md-12">{{$item->moviename}}</div>
                    </div>
                     <div class="row">
                      
                        <div class="col-md-12"> {{$item->actorname}}</div>
                     </div>
         @foreach ($random as $randoms)
                         
                    
           @if ($randoms->id == $item->cid)
           {{$randoms->categoryname}}
               
          
            @endif     
           
           @endforeach
             </div>
            </div>
            <br><br>  
                
        
        
        </div> 
        
      
      
    
       @endforeach   
       @else
                
       <div class="container-fruid" id="name">

       
          <h4>ဤဇာတ်လမ်းနာမည်ဖြင့်ရှာဖွေထားသောဇာတ်လမ်း မရှိသေးပါ </h4>
      </div>
       @endif
      </div>
      </div>
    
  

      
            <div class="container-fruid"> 
        
                    <div  id="carda">
                        <div class="card-body">
                         <h3> သရုပ်ဆောင်နာမည်ဖြင့်ရှာဖွေထားသောဇာတ်လမ်းများ </h3>   
                          </div>
                      </div><br>
                  </div>
            <div class="container">
                    <div class="row">
                      @if($name->count() > 0)
                      @foreach ($name as $item)
                     
                             
                        
                   <div class="col-md-4">
                      <a href="{{url('playmovie',$item->id)}}">
                          <div class="row" id="aa" style="background-image: url('{{'image/'.$item->imagename}}')">
                              </div>
                       
                        </a>
                        <div class="row" id="textcolor">
                           <div class="col-md-12">
                                <div class="row">
            
                                
                                    <div class="col-md-12">{{$item->moviename}}</div>
                                </div>
                                 <div class="row">
                                  
                                    <div class="col-md-12"> {{$item->actorname}}</div>
                                 </div>
                                 @foreach ($random as $randoms)
                         
                    
                                 @if ($randoms->id == $item->cid)
                                 {{$randoms->categoryname}}
                                     
                                
                                     
                                 @endif
                                 @endforeach
                         </div>
                        </div>
                        <br><br>  
                            
                    
                    
                    </div>  
                    @endforeach  
                    @else
                         
        <div class="container-fruid" id="name">

         
            <h4> သရုပ်ဆောင်နာမည်ဖြင့်ရှာဖွေထားသောဇာတ်လမ်း မရှိသေးပါ </h4>
        </div>
                    
                  @endif
                   
                    </div>
                   
                  </div>
                   
      
       @endsection