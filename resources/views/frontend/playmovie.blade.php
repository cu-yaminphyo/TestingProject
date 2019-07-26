@extends('frontend.main')


@section('content')
{{-- for like --}}
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3&appId=712745789184358&autoLogAppEvents=1"></script>
{{-- for share --}}
<div id="fb-root"></div>
{{-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3&appId=712745789184358&autoLogAppEvents=1"></script> --}}

{{-- for comment --}}
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3&appId=712745789184358&autoLogAppEvents=1"></script> 

<div class="container">
    <div class="row">
      <div class="col-md-2">

      </div>
      <div class="col-md-8">
          <iframe width="807" height="454" src="{{$id->link}}" frameborder="0" allowfullscreen ></iframe>
          <div class="row">
           <div class="col-md-6">
              {{$id->moviename}} <br>
              {{$id->actorname}}<br>
              @foreach ($category as $idname)
              @if ($idname->id == $id->cid)
              {{$idname->categoryname}}            
              @endif
              @endforeach
           </div>
           <div class="col-md-6">
           
              <link rel="stylesheet" type="text/css" href="style.css">
   
              <link rel="stylesheet"  href="{{asset('css/rate.css')}}" type="text/css">

              <div class="rate">
                  <input type="radio"  id="star5" name="rate" value="252" />
                  <label for="star5" title="text">5 stars</label>
                  <input type="radio" id="star4" name="rate" value="124" />
                  <label for="star4" title="text">4 stars</label>
                  <input type="radio" id="star3" name="rate" value="90" />
                  <label for="star3" title="text">3 stars</label>
                  <input type="radio" id="star2" name="rate" value="50" />
                  <label for="star2" title="text">2 stars</label>
                  <input type="radio" id="star1" name="rate" value="33" />
                  <label for="star1" title="text">1 star</label>
              </div>
              
           </div>
          </div><br><br>
          <div class="row">
               {{$id->review}}
          </div><br><br>
          <div class="row">
            <div class="col-md-6">
                 <div class="fb-like" data-href="{{Request::url()}}" data-width="" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="false"></div>


            </div>
            <div class="col-md-6">
                <div class="fb-comments" data-href="{{Request::url()}}" data-width="400px" data-numposts="5"></div></div>
            </div>
          </div>
      </div>
      <div class="col-md-2">

      </div>
    </div> 
</div>
    
@endsection