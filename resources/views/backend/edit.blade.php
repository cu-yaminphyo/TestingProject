@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a contact</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('backend.update', $contact->id) }}" enctype="multipart/form-data">
            @method('PATCH') 
            @csrf
            {{-- <select class="form-control" name="cid">
                @foreach($table as $tables)
            <option value="{{$tables->categoryname}}">{{$tables->categoryname}}</option>
                @endforeach
              </select>  --}}
              <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-7"></div>
              </div>
            
            <div class="form-group">
                    <div class="row">
                            <div class="col-md-3">
                <label for="cid">ဇာတ်လမ်းအမျိုးအစား :</label>
            </div>
            <div class="col-md-7">
                <select class="form-control" name="cid">
                @foreach($table as $tables)
                <option value="{{ $tables->id }}" {{ $tables->id == $contact->cid ? 'selected' : '' }}>{{ $tables->categoryname }}</option>
                @endforeach
                </select> 
            </div>
        </div>
                {{-- <input type="text" class="form-control" name="cid" value={{ $contact->cid }} /> --}}
            </div><br>

            <div class="form-group">
                    <div class="row">
                            <div class="col-md-3">
                <label for="moviename">ဇာတ်လမ်းအမည် :</label>
            </div>
            <div class="col-md-7">
                <input type="text" class="form-control" name="moviename" value="{{ $contact->moviename }}" />
            </div>
        </div>
            </div>

            <div class="form-group">
                    <div class="row">
                            <div class="col-md-3">
                <label for="link">Link:</label>
            </div>
            <div class="col-md-7">
                <input type="url" class="form-control" name="link" value={{ $contact->link }} />
            </div>
        </div>
            </div><br>
            <div class="form-group">
                    <div class="row">
                            <div class="col-md-3">
                <label for="imagename">ပုံထည့်ရန် :</label>
            </div>
            <div class="col-md-7">
                @if ("image/{{ $contact->imagename }}")
                    <img src="{{ url('image/' . $contact->imagename) }}" style="width: 40px; height: 40px"/>
                @else
                        <p>No image found</p>
                @endif
                <input type="file" name="imagename" value="{{ $contact->imagename }}"/>             
            </div>
        </div>
                {{-- <input type="text" class="form-control" name="imagename" value={{ $contact->imagename }} /> --}}
            </div><br>
            <div class="form-group">
                    <div class="row">
                            <div class="col-md-3">
                <label for="actorname">သရုပ်ဆောင်အမည် :</label>
            </div>
            <div class="col-md-7">
                <input type="text" class="form-control" name="actorname" value={{ $contact->actorname }} />
            </div>
                    </div>
            </div><br>
            <div class="form-group">
                    <div class="row">
                            <div class="col-md-3">
                <label for="review">Review:</label>
            </div>
            <div class="col-md-7">
                {{-- <input type="text" class="form-control" name="review" value="{{ $contact->review }}" /> --}}

               
                <textarea id="my-textarea"  class="form-control" name="review" value="{{$contact->review}}">{{$contact->review}}</textarea>
           
            </div>
                    </div>
                
            </div><br>
            <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
        <div class="col-md-3"></div>
        </div>
    </div>
        </form>
    </div>
</div>
@endsection