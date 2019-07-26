@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a New Movies</h1>
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
      <form method="post" action="{{ route('backend.store') }}"  autocomplete="off" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
              <div class="row">
                  <div class="col-md-3">
              <label for="Category Name"><b>ဇာတ်လမ်းအမျိုးအစား :</b></label>
            </div>
            <div class="col-md-7">
          <select class="form-control" name="categoryname">
            @foreach($table as $tables)
              <option value=" {{empty($get_dentist_info)? $tables->categoryname:$tables->categoryname}}"> {{$tables->categoryname}}</option>
            @endforeach
          </select> 
            </div>
              </div>
          
        </div>
          {{-- <div class="form-group">
              <label for="cid">Category Name:</label>
              <input type="text" class="form-control" name="cid"/>
          </div> --}}
      
  

          <div class="form-group">
              <div class="row">
                  <div class="col-md-3">
              <label for="moviename"><b>ဇာတ်လမ်းအမည် :</b></label>
                  </div>
                  <div class="col-md-7">

              <input type="text" class="form-control" name="moviename"/>
            </div>
          </div>
          </div>
        
          <div class="form-group">
              <div class="row">
                  <div class="col-md-3">
        
              <label for="link"><b>Link : </b></label>
            </div>
            <div class="col-md-7">
  
              <input type="text" class="form-control" name="link"/>
            </div>
          </div>
          </div>
          <div class="form-group">
              <div class="row">
                  <div class="col-md-3">
           <label for="imagename"><b>ပုံထည့်ရန် :</b></label>
          </div>
          <div class="col-md-7">
                <input type="file" name="imagename" id="imagename" class="form-control"> 
              </div>
            </div>             
              {{-- <input type="text" class="form-control" name="imagename"/>  --}}
          </div>
          <div class="form-group">
              <div class="row">
                  <div class="col-md-3">
              <label for="actorname"><b>သရုပ်ဆောင်အမည် :</b></label>
            </div>
            <div class="col-md-7">
              <input type="text" class="form-control" name="actorname"/>
            </div>
              </div>
          </div>
          <div class="form-group">
              <div class="row">
                  <div class="col-md-3">
            <label for="review"><b>Review :</b></label>
          </div>
          <div class="col-md-7">
            <input type="text" class="form-control" name="review"/>
          </div>
        </div>
        </div>
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6"> <button type="submit" class="btn btn-primary"><b>Add contact</b></button>
            </div>
            <div class="col-md-3"></div>
            </div>
        </div>
      </form>
  </div>
</div>
</div>

@endsection