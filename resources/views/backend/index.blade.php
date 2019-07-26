 @extends('base')
 @extends('layouts.app')
@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">MM Movies</h1>  
    
    {{-- <a href ="{{route ('logout')}}">Logout</a> --}}
    <div class="row">
            <div>
                <a style="margin: 19px;" href="{{ url('main')}}" class="btn btn-primary">ပင်မစာမျက်နှာ</a>
                </div>   
                <div>
                    <a style="margin: 19px;" href="{{ route('backend.create')}}" class="btn btn-primary">ဇာတ်လမ််းအသစ်များထပ်ထည့်ရန်</a>
                  <a style="margin: 19px;" href="{{ route('addcategory.create')}}" class="btn btn-primary">အမျိးအစားအသစ်များထပ်ထည့်ရန်</a> 

                    </div>  
                </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td><b>အမှတ်စဥ်</b></td>
          <td><b>အမျိးအစား</b></td>
          <td><b>ဇာတ်လမ်းအမည်</b></td>
          <td><b>Link</b></td>
          <td><b>Image Name</b></td>
          <td><b>သရုပ်ဆောင်အမည်</b></td>
          <td colspan = 2><b>လုပ်ဆောင်ချက်</b></td>
        </tr>
    </thead>
    <tbody>
        @foreach($contacts as $contact)
       
        <td>{{$loop->iteration}}</td>
        @foreach ($cate as $cates)
            @if ($cates->id == $contact->cid)
            <td>{{$cates->categoryname}}</td>
                
            @endif
        @endforeach
       

            <td>{{$contact->moviename}}</td>
            <td>{{$contact->link}}</td>
            <td>{{$contact->imagename}}</td>
            <td>{{$contact->actorname}}</td>
            <td>
                <a href="{{ route('backend.edit',$contact->id)}}" class="btn btn-primary"><b>ပြုပြင်ရန်</b></a>
            </td>
            <td>
                <form action="{{ route('backend.destroy', $contact->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger deleteUser " type="submit"><b>ပယ်ပျက်ရန်</b></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).on('click','.deleteUser',function() {
        var url = $(this).attr('rel');
        if(confirm("Are you sure you want to delete this?")){
           window.location.href = url
        }
        else{
            return false;
        }
    })
</script>
@endsection 

