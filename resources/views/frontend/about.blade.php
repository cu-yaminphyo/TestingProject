@extends('frontend.main')


@section('content')<br><br>
<div class="container-fluid" id="about">
    <div class="row " ><br>
        <div class="col-md-7"><br>
        ဤ website သည် မြန်မာဇာတ်ကားကြိုက်နှစ်သက်သူများအတွက် သင့်တော်သော website တစ်ခုဖြစ်ပါသည်။

        ကြည့်ရှုသူများသည် မိမိတို့ကြိုက်နှစ်သက်သော ဇာတ်ကားများကို အလွယ်တကူ ရှာဖွေနိုင်အောင် ဤ website က ကူညီပေးထားပါသည်။ 

        နောက်ထပ်တွင်လည်း အသစ်သစ်သော ဇာတ်လမ်းများကို ဤ website တွင် တင်ဆက်ပေးမည်ဖြစ်ပါသည်။


        </div>
        <div class="col-md-1"></div>
        <div class="col-md-4"><br>
            <div class="row">
                 <div class="col-md-12">
                  Development by
                  <br>
                 
                 </div>
            </div> 
            <div class="row" >      
                 <div class="col-md-12">
                          <div class="row" id="aa" style="background-image: url('{{asset('image/yamin.png')}}')"></div>
                    {{-- <img src="{{asset('image/facebook.png')}}"><br>  --}}
                    {{-- <div class="row" id="image" style="background-image: url('{{asset('image/book.jpg')}}')"></div> --}}
                    {{-- <div class="card-img-overlay"> --}}

                    <a href="https://www.facebook.com/yamin.phyo.12935">yaminphyo@facebook.com </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection