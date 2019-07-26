@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a Category Name</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('addcategory.store') }}"  autocomplete="off" enctype="multipart/form-data">
          @csrf
        
        
          
  

          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
              <label for="categoryname">ဇာတ်လမ်းအမျိုးအစား :</label>
            </div>
            <div class="col-md-7">
              <input type="text" class="form-control" name="categoryname"/>
            </div>
            </div>
          </div>
        
         <div class="row">
           <div class="col-md-3"></div>
           <div class="col-md-6"><button type="submit" class="btn btn-primary">Add contact</button>
           </div>
           <div class="col-md-3"></div>
         </div>
      </form>
  </div>
</div>
</div>

@endsection