<nav class="navbar fixed-top navbar-expand-lg navbar-lihtg" style="background-color: #e3f2fd;">
            <a class="navbar-brand" href="{{url('main')}}" id="navbarDropdown">ပင်မစာမျက်နှာ</a>

    {{-- <a class="navbar-brand" href="{{url('main')}}" >ပင်မစာမျက်နှာ</a> --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav mr-auto">

            {{-- <li class="nav-item active">
                {{-- <a class="nav-item nav-link active" href="">Home <span class="sr-only">(current)</span></a> --}}
            {{-- </li> --}} 
      <li class="nav-item dropdown">
          <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              မြန်မာဇာတ်ကားများစုစည်းမှု
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="navitem">
              @foreach($category as $categoryid)
               <a  class="dropdown-item"  href="{{url('frontend/showall' ,$categoryid->id)}}">{{ $categoryid->categoryname }}</a>
            @endforeach
          </div>
      </li>
      <li class="nav-item active">
          <a class="nav-link" href="{{url('about')}}" id="navbarDropdown">အကြောင်းအရာ</a>
      </li>
        </ul>
        <span>
        <form autocomplete="off" method="GET"  action="/search">
          {{ csrf_field() }}
          <div class="autocomplete" style="width:300px;height:50px">
          <input  type="search" placeholder="Search" name="search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </div>
        </form>
        </span>
      </div>
   
  </nav>