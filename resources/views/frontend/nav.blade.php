
<nav class="navbar navbar-expand-lg bg-light">
  
    <a class="navbar-brand" href="{{url('main')}}" id="navbarDropdown">ပင်မစာမျက်နှာ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item dropdown">
          <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              မြန်မာဇာတ်ကားများစုစည်းမှု
          </a>

          {{-- <div class="form-group">

            <label for="cid">Category Name:</label>
            <select class="form-control" name="cid">
            @foreach($table as $tables)
            <option>{{ $tables->categoryname }}</option>
            @endforeach
            </select> 
        
            {{-- <input type="text" class="form-control" name="cid" value={{ $contact->cid }} /> --}}
         {{-- </div>  --}} 
          <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="navitem">
              @foreach($category as $categoryid)
               <a  class="dropdown-item"  href="{{url('frontend/showall' ,$categoryid->id)}}">{{ $categoryid->categoryname }}</a>
            @endforeach
            {{-- <a class="dropdown-item" href="{{url('action')}}" >အကြမ်းဇာတ်လမ်းများ</a>
            <a class="dropdown-item" href="{{url('drama')}}"> အချစ်ဇာတ်လမ်းများ</a>
            <a class="dropdown-item" href="{{url('funny')}}">ဟာသဇာတ်လမ်းများ</a>
            <a class="dropdown-item" href="{{url('ghost')}}">ကြောက်မက်ဖွယ်ရာဇာတ်လမ်းများ</a> --}}
          </div>
        </li>
        <a class="nav-link" href="{{url('about')}}" id="navbarDropdown">အကြောင်းအရာ</a>
            </ul>
      <form autocomplete="off" method="GET"  action="/search">
        {{ csrf_field() }}
        <div class="autocomplete" style="width:300px;height:50px">
        <input  type="search" placeholder="Search" name="search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </div>
      </form>
    
    </div>
  
  </nav>