@extends('frontend.main')


@section('content')
<br>
<br>
<br>
{{-- for like --}}
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3&appId=712745789184358&autoLogAppEvents=1"></script>
{{-- <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3&appId=712745789184358&autoLogAppEvents=1"></script> --}}
{{-- for share --}}
<div id="fb-root"></div>
{{-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3&appId=712745789184358&autoLogAppEvents=1"></script> --}}

{{-- for comment --}}
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3&appId=712745789184358&autoLogAppEvents=1"></script> 
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
    {{$id->review}}
</div>
<div class="col-md-2"></div>
</div><br><br>
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
            <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
            <div class="stars">
              <form action="">
                <input class="star star-5" id="star-5" type="radio" name="star"/>
                <label class="star star-5" for="star-5"></label>
                <input class="star star-4" id="star-4" type="radio" name="star"/>
                <label class="star star-4" for="star-4"></label>
                <input class="star star-3" id="star-3" type="radio" name="star"/>
                <label class="star star-3" for="star-3"></label>
                <input class="star star-2" id="star-2" type="radio" name="star"/>
                <label class="star star-2" for="star-2"></label>
                <input class="star star-1" id="star-1" type="radio" name="star"/>
                <label class="star star-1" for="star-1"></label>
              </form>
            </div>
   

            {{-- <link rel="stylesheet" type="text/css" href="style.css">
   
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
             --}}
             <script>
               div.stars {
  width: 270px;
  display: inline-block;
}

input.star { display: none; }

label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}

input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;
  transition: all .25s;
}

input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}

input.star-1:checked ~ label.star:before { color: #F62; }

label.star:hover { transform: rotate(-15deg) scale(1.3); }

label.star:before {
  content: '\f006';
  font-family: FontAwesome;
}
               </script>
         </div>
        </div><br><br>
       
          <div class="row">
            <div class="col-md-6">
                    <div id="fb-root"></div>
                    
                    <script type="text/javascript">
                        var capnum = 0;
                        function add(){
                             capnum++;
                             document.getElementById('display').innerHTML = capnum;
                        }
                        </script>
                        <button onclick="add()">Add</button>
                        <div id="display"><script type="text/javascript">document.write(capnum);</script></div>
                           
                            
                           
                    {{-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3&appId=712745789184358&autoLogAppEvents=1"></script>
            <div class="fb-like" data-href="{{Request::url()}}" data-width="400px" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="false"></div>
                   --}}
            </div>
            <div class="col-md-6">
                   
            {{-- <button type="submit" name="btn" href="{{action("CounterController@store")}}">Like </button> --}}
                          <div class="fb-comments" data-href="{{Request::url()}}" data-width="400px" data-numposts="5"></div>
                    {{-- <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">  </button> --}}
            
                {{-- <button class="fb-comments" data-numposts="5" data-href="{{Request::url()}}">Comment</button> --}}
            </div>
          </div>
      </div>
      <div class="col-md-2">

      </div>
    </div> 
</div>

@endsection