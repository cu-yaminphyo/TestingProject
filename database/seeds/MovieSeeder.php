<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            ['cid'=>'1','moviename'=>'နှင်းဆီကွန်ယက်','link'=>'https://www.youtube.com/embed/VfT8fm7pmnk','imagename' => '/image/rose.jpg','actorname'=>'အောင်ရဲလင်း၊ပက်ထရစ်ရှာ','review'=>'ယောက်ျားလေးတွေရဲ့အသည်းကိုလှုပ်ခါစေတဲ့ ကဗျာ မှာ အနားကိုချဉ်းကပ်လာသူတိုင်းကိုလက်မခံဘဲနေလာခဲ့ရင်း  Z ဆိုတဲ့ကောင်းလေးမှာ ကဗျာ ရဲ့ရင်ကိုတုန်ခါသွားအောင်  နှင်းဆီပန်း၇ ပွင့် နဲ့ဘယ်လိုရင်ခုန်အောင်လုပ်သွားမလဲဆိုတော့ နှင်းဆီကွန်ယက် ထဲကိုဝင်ရောက်မယ့်သူကဘယ်သူဖြစ်သွားမလဲ ...'],
            ['cid'=>'1','moviename'=>'ရည်းစားထားတဲ့ဂိမ်း','link'=>'https://www.youtube.com/embed/t76iQMFXk7Q' , 'imagename' => '/image/yeesar.jpg' ,'actorname'=>'မြင့်မြတ်၊နေဒွေး၊ညီထွဋ်ခေါင်၊ရွှေမှုံရတီ','review'=>'"မင်းချမ်းငြိမ် ၊ ထွန်းဝီရ ၊ အလင်းစစ်ပိုင် နဲ့ ထင်သစ္စာ
            တို့ရဲ့ ရည်းစားထားတဲ့ဂိမ်း ကိုဘယ်လိုများ စတင် 
            ကစားရမလဲ ... ဂိမ်းစည်းကမ်းတွေကဘယ်လိုဖြစ်မလဲ...
            ရည်းစားထားတဲ့ဂိမ်း မှာဘယ်သူအနိုင်ရရှိမလဲဆိုတာ ..."'],        
            ['cid'=>'1','moviename'=>'ဟင့်အင်း','link'=>'https://www.youtube.com/embed/4u9R7ou30SQ' , 'imagename' => '/image/hininn.jpg' ,'actorname'=>'မြင့်မြတ်၊ခိုင်သင်းကြည်','review'=>'aaaaaaaa'],
            ['cid'=>'1','moviename'=>'သားသမီးတို့၀တ်တရားရှိသည့်အတိုင်း','link'=>'https://www.youtube.com/embed/VlCXJJrJnW0', 'imagename' => '/image/thartame.jpg' ,'actorname'=>'မြင့်မြတ်၊နေအောင်၊ချမ်းမီမိကို၊စိုးမြတ်သူဇာ','review'=>'aaaaaaaa'],
            ['cid'=>'1','moviename'=>'ကြောင်နှင့်ကြွက်','link'=>'https://www.youtube.com/embed/z1UrZaRugsQ' , 'imagename' => '/image/catandmouse.jpg' ,'actorname'=>'မြင့်မြတ်၊သက်မွန်မြင့်','review'=>'aaaaaaaa'],
            ['cid'=>'1','moviename'=>'လွှတ်ပါတော်','link'=>'https://www.youtube.com/embed/jSERPgEn6bM' , 'imagename' => '/image/lattpartaw.png' ,'actorname'=>'နေတိုး၊ကျော်ကျော်ဗိုလ်၊သက်မွန်မြင့်၊ရွှေမှုံရတီ','review'=>'တိုးပွားအောင် နဲ့ ဖိုးသာမွှေး မှာငယ်စဉ်ကတည်းက
            တစ်ဦးနဲ့တစ်ဦး အနိုင်ယူခဲ့တာကြောင့် အချစ်ရေးဖြစ်တဲ့
            ရွှေမှုံ ရဲ့အချစ်ကို အပြိုင်ကြိုးစားရင်း တိုးပွားအောင် ရဲ့
            တဖက်သတ်ချစ်နေတဲ့ သက်ထား မှာ အောင်သွယ်လုပ်ပေးတော့
            ရွှေမှုံ မှာ တိုးပွားအောင် ကိုရွေးမလား .. ဖိုးသာမွှေး ကိုရွေးမလား ..'],
            ['cid'=>'1','moviename'=>'လူပျိုကြီး၏ဖူးစာအလွဲ','link'=>'https://www.youtube.com/embed/XywYHwlriWo' , 'imagename' => '/image/lupyogyi.png' ,'actorname'=>'ကျော်ရဲအောင်၊စိုးမြတ်နန္ဒာ','review'=>'လူပျိုကြီး ကျော်ရဲအောင်တစ်ယောက် ကောင်မလေးတွေ
            တစ်ယောက်ပြီးတစ်ယောက်နဲ့ ဖူးစာလွဲပြီး နောက်ပိုင်း
            စိုးမြတ်နန္ဒာ နဲ့ရော ဖူးစာဆုံပါ့မလားဆိုတာ...'],
            ['cid'=>'1','moviename'=>'တလွဲစိန်','link'=>'https://www.youtube.com/embed/s6I7J76wMtM' ,'imagename' => '/image/talaesein.jpg' ,'actorname'=>'ပြေတီဦး၊အိချောပို၊ရွှေပိုးအိမ်','review'=>'သမား တစ်ယောက် ရွှေသဉ္ဇာ တို့အိမ်ကိုအလည်လာရင်း 
            အိမ်စေဖြစ်တဲ့ နန်းဘုံ ကိုမြင်မြင်ချင်းချစ်မိခဲ့ရာကအစပြုပြီး
            သမား မှာ နန်းဘုံ ရဲ့အချစ်ကိုရယူပိုင်ဆိုင်နိုင်မလား ... သမား 
            တစ်ယောက် နန်းဘုံ ကိုပဲရွေးချယ်မလား ... ရွှေသဉ္ဇာ ရဲ့လှည့်ကွက်
            ထဲကိုလှလှပပဝင်ရောက်သွားမလားဆိုတာကိုတော့ ....'],
            ['cid'=>'1','moviename'=>'အထီးမှုံ','link'=>'https://www.youtube.com/embed/B09q8SYBZ-0', 'imagename' => '/image/ahteehmone.jpg','actorname'=>'မင်းမော်ကွန်း၊သွန်းဆက်','review'=>'"အထီးမှုန်အဖြစ်ကျိန်စာတိုက်ခံခဲ့ရတဲ့တော်ဝင်တစ်ယောက် 
            ပိုပို့အချစ်ကိုရဖို့အတွက် ယောက္ခထီးဖြစ်သူနဲ့ 
            ဘယ်လိုဟာသဆန်ဆန်ရင်ဆိုင်ရမလဲဆိုတာ..."'], 
            ['cid'=>'1','moviename'=>'ချုပ်ဆေး','link'=>'https://www.youtube.com/embed/VQZDq9F1Ti4', 'imagename' => '/image/chotesae.jpg','actorname'=>'ဇေရဲထက်၊ဖွေးဖွေး','review'=>'aaaaaaaa'],

           

            ['cid'=>'2','moviename'=>'ဒေါင်းယဥ်ပျံနံဘေးမှာစာရေးလို့ထားချင်တယ်','link'=>'https://www.youtube.com/embed/gipV2OMzp0g', 'imagename' =>'/image/down.jpg','actorname'=>'ဟိန်း၀ေယံ၊သင်ဇာ၀င့်ကျော်','review'=>'ဒီဇာတ်လမ်းလေးက လူ့ဘဝဇာတ်ခုံမှာ အဖြစ်များတဲ့ အိမ်ထောင်ရေးပညာပေး ကားလေးပါ
            လူ့သဘာဝ မှာဖြစ်လေ့ဖြစ်ထရှိတဲ့ အိမ်ထောင်ရေးဖောက်ပြန်မူတွေ ကို ရင့်နှင့်ဖွယ့် ကြည့်ရူရမှာပါ
            ဇာတ်လမ်း အကျဉ်းကတော့........
            သူ့နာမည်က သက်သက် လှပလွန်းပြီး စွဲဆောင်မူရှိတဲ့ ရုပ်ရည်ကြောင့် တကျောင်းလုံး တမ်းတမ်းစွဲဖြစ်နေတဲ့သူလေးပေါ့ 
            သက်သက်က တနေ့မှာ သူ့မောင်လေး ဆယ်တန်း အောင်စရင်းအတွက် သူ့ သူငယ်ချင်းအသိ ဆယ်တန်း ဆရာမစီ သွားအကူညီတောင်းတယ်
            ဆရာမသာပြောတယ် အသက်ကြီးကြီးထဲက မဟုတ်တဲ့အပြင် ရုပ်ရည် လှပပြီး ကျက်သရေရှိတဲ့ ဆရာမဖြစ်နေတယ်
            ဆရာမ နာမည်ကတော့ မမဦးတဲ့ သူမှာ အိမ်ထောင်လည်းရှိပြီး သူ့ ခင်ပွန်းကလည်း ငယ်ငယ်ချောချောဖြစ်တယ်
            သက်သက်ကို သူ့ သူငယ်ချင်းတွေက အမြဲ ဆရာမတို့လင်မယား ဘယ်လောက်ချစ်ကြောင်း အမြဲလိုလို ပြောပြတယ်
            ဆရာမ ယောကျာ်းဖြစ်တဲ့ ကိုနိုင်လင်းကတော့ သက်သက်ကို မြင်တဲ့နေ့ကစပြီး ကျောင်းအမြဲလိုက်ပို့ရင်းနဲ့ သံယောစဉ်တွေပိုလာတယ်
            သူ့မမဦး ချစ်တာတွေ ဂရုစိုက်တာတွေကို ချုပ်ချယ်တယ် သဝန်တိုတယ် လို့မြင်လာပြီး သက်သက်နားကို တဖြည်းဖြည်းရောက်လာတယ်
            သက်သက်ကတော့ သူ့ကို ပြန်မချစ်သော်လည်း သူ့ငယ်ချင်းတွေရဲ့ ဝေဖန်မှူတွေကို အရွဲ့တိုက်တဲ့နောက်မှာ ဘာတွေ ဆက်ဖြစ်ကြမလဲ ဆက်လက်စောင့်ကြည့်ကြပါဦး............
            ဒီဇာတ်လမ်းထဲမှာ သက်သက် အဖြစ် သင်ဇာဝင့်ကျော်
            ကိုနိုင်လင်းအဖြစ် ဟိန်းဝေယံနဲ့ မမဦးအဖြစ် ဆုပန်ထွာတို့က သရုပ်ဆောင်ထားပါတယ်'],
            ['cid'=>'2','moviename'=>'ခရေပုံပြင်','link'=>'https://www.youtube.com/embed/OagtxiJOYzM' ,'imagename' => '/image/kayapopyin.jpg','actorname'=>'ဟိန်း၀ေယံ၊မိုးဟေကို','review'=>'ကောင်လေး နာမည်က ညီဇော်  သူက ကြိုးစားတယ် သူ့ သူငယ်ချင်း ဂူဂူးကို လည်း တအားဂရုစိုက်တယ်  ဂူဂူးက ငယ်ငယ်ကတည်းက ဆင်းရဲတယ် ဝတ်စရာ အကျီတွေ ထမိန်တွေ စုတ်လာလို့ ကျောင်းတောင် မသွားချင်တော့ဘူးဆိုပြီး ညီဇော်ကိုပြောတယ် ညီဇော်ကလည်း ဂူဂူးအတွက်ဆို လမ်းအတူတူလျောက်တဲ့ ခရေပင်အောက် က ခရေပန်းလေးတွေ ကောက်ပြီး လိုက်ရောင်းပြီး ဂူဂူးအတွက် အဝတ်တွေ ဝယ်ဖို့ ကြိုးစားတယ်......... ညီဇော်ကရော ဂူဂူးကို သံယောစဉ် ဘယ်လိုထားလည်း ဂူဂူးကရော ညီဇော်ထားတဲ့ သံယောစဉ်တွေ နားလည်နိုင်ပါ့မလား ဆိုတာကို ဆက်လက် စောင့်ကြည့်ကြပါဦးစို့............ 


            ညီဇော် အဖြစ် ဟိန်းဝေယံ က သရုပ်ဆောင်ပြီး
             ဂူဂူး အဖြစ် မိုးဟေကိုက သရုပ်ဆောင်ထားပါတယ်'],
            ['cid'=>'2','moviename'=>'ကြည်ဖြူစွာချစ်ခွင့်','link'=>'https://www.youtube.com/embed/phfUFBGoPlc' , 'imagename' => '/image/kyiphyu.jpg','actorname'=>'ဟိန်း၀ေယံ၊သင်ဇာ၀င့်ကျော်၊စိုးပြည့်သဇင်','review'=>'ကောင်းမြတ်ကျော် မှာ သစ္စာဦးခင် ကိုဖိနပ်ရောင်းရာမှအစပြုပြီးချစ်မိသွားရာ
            ချစ်သူတွေဖြစ်ခါနီးဆဲဆဲတွင် သစွာဦးခင် တစ်ယောက်ပျောက်သွားခဲ့တော့ 
            ကောင်းမြတ် မှာလိုက်လံရှာဖွေရင်း သစွာဦးခင် ရဲ့လိပ်စာကဒ်လေးကိုတွေ့ရှိပြီး
            လိုက်သွားရာပြီး မိမိတွေ့ချင်တဲ့ သစ္စာဦးခင် မဟုတ်တာကြောင့်ကောင်းမြတ် 
            တစ်ယောက်ဘယ်လိုတွေအံ့သြသွားမလဲ ဘယ်လိုတွေဆက်ဖြစ်ကြမလဲဆိုတာ...'],
            ['cid'=>'2','moviename'=>'အ၀ေးဆုံးမှာ','link'=>'https://www.youtube.com/embed/5IB4z4C856Q' , 'imagename' => '/image/away.jpg','actorname'=>'အောင်ရဲလင်း၊စိုးပြည့်သဇင်','review'=>'aaaaaaaa'],
            ['cid'=>'2','moviename'=>'ရှင့်အမေနဲ့ကျမ','link'=>'https://www.youtube.com/embed/c_YWv5rllms', 'imagename' => '/image/motherandme.jpg','actorname'=>'သူရိယ၊စုအိမ်စံ၊ခိုင်နှင်း၀ေ','review'=>'aaaaaaaa'],
            ['cid'=>'2','moviename'=>'လိပ်ပြာ','link'=>'https://www.youtube.com/embed/zRuKZK2ycfM'  , 'imagename' => '/image/lateblue.jpg','actorname'=>'ပြေတီဦး၊၀တ်မှုံရွှေရည်၊ခိုင်နှင်း၀ေ','review'=>'aaaaaaaa'],
            ['cid'=>'2','moviename'=>'အမွေ','link'=>'https://www.youtube.com/embed/n1avcXYhgaM' , 'imagename' => '/image/am.jpg','actorname'=>'ပြေတီဦး၊ထွန်အိန္ဒြာဗိုလ်','review'=>'aaaaaaaa'],
            ['cid'=>'2','moviename'=>'ကြွေမွအသည်း','link'=>'https://www.youtube.com/embed/-bJTTmO_qOg' , 'imagename' => '/image/a.jpg','actorname'=>'ပြေတီဦး၊သက်မွန်မြင့်၊န၀ရတ်','review'=>'aaaaaaaa'],
            ['cid'=>'2','moviename'=>'က၀ေချိုးတဲ့ဖဲ','link'=>'https://www.youtube.com/embed/l9Gmfw4_FSY', 'imagename' => '/image/a.jpg','actorname'=>'ဇေရဲထက်၊စိုးမြတ်နန္ဒာ','review'=>'aaaaaaaa'], 
            ['cid'=>'2','moviename'=>'နတ်သမီးချည်တဲ့ကြိုး','link'=>'https://www.youtube.com/embed/uYJ75di6hrI', 'imagename' => '/image/natttame.jpg','actorname'=>'ပြေတီဦး၊သက်မွန်မြင့်','review'=>'ပိုင်ထက်အေး မှာသူဌေးဖြစ်ပေမယ့် အိမ်ကထွက်ပြေးလာတဲ့အိမ်ပြေးဖြစ်ပြီး 
            သစ္စာ တို့အလုပ်လုပ်တဲ့ဟော်တယ်မှာလာရောက်တည်းခိုရင်း သစ္စာ နဲ့တွေ့ဆုံပုံလေးကတော့ ဟာသဆန်ဆန် အထင်အမြင်လွဲမှုတွေနဲ့ဆုံတွေ့ပြီး ပိုင်ထက်အေး နဲ့ သစ္စာ မှာချစ်မိခဲ့ရာကအစပြုပြီး ပိုင်ထက်အေး တို့အိမ်ကသဘောတူမလားဆိုတာ ....'],


            ['cid'=>'3','moviename'=>'တစ်ကိုယ်တော်ဗိုလ်ကျော်','link'=>'https://www.youtube.com/embed/NKdJ0JVBDkw' , 'imagename' => '/image/bokyaw.jpg','actorname'=>'နေထူးနိုင်၊၀င်းသပြေတင်၊သွန်းစုနဒီ၊ပြည့်ပြည့်သော်','review'=>'aaaaaaaa'],
            ['cid'=>'3','moviename'=>'ကား','link'=>'https://www.youtube.com/embed/G7Nk_uMqNr0'     , 'imagename' => '/image/car.jpg','actorname'=>'လူမင်း၊အိချောပို၊ဆုမြတ်နိုးဦး','review'=>'aaaaaaaa'],
            ['cid'=>'3','moviename'=>'ယောကျ်ားပိုင်းလုံး','link'=>'https://www.youtube.com/embed./YAUFoDRrk78', 'imagename' => '/image/pielone.jpg','actorname'=>'နေထူးနိုင်၊ဆုရွှန်းလဲ့','review'=>'aaaaaaaa'],
            ['cid'=>'3','moviename'=>'ကြွေကွဲပျက်သုဥ်းခြင်း','link'=>'https://www.youtube.com/embed/le4Lihw-wj4', 'imagename' => '/image/kawe.jpg','actorname'=>'ဂျွန်ကို၊မိုးပြည့်ပြည့်မောင်','review'=>'aaaaaaaa'],
            ['cid'=>'3','moviename'=>'ကလဲ့စား','link'=>'https://www.youtube.com/embed/ycurstOvkZM' , 'imagename' => '/image/kalaesar.jpg','actorname'=>'သီဟတင်စိုး၊သားညီ၊ပွင့်နဒီမောင်','review'=>'aaaaaaaa'],
            ['cid'=>'3','moviename'=>'မြွေမြွေခြင်းခြေမြင်','link'=>'https://www.youtube.com/embed/sW9Ari5x3S8' , 'imagename' => '/image/s.jpg','name'=>'ကျော်ရဲအောင်၊ရဲရင့်ထူး၊ချမ်းမီမိကို','review'=>'aaaaaaaa'],
            ['cid'=>'3','moviename'=>'တစ်ဘ၀စံ','link'=>'https://www.youtube.com/embed/bVzeMEbXQ40', 'imagename' => '/image/tabawo.jpg','actorname'=>'ဂျွန်ကို','review'=>'aaaaaaaa'],
            ['cid'=>'3','moviename'=>'နဂါးလမ်း','link'=>'https://www.youtube.com/embed/0ykp0Uwzlrk'   , 'imagename' => '/image/nagar.jpg','actorname'=>'နေတိုး၊မင်းဟိဏ်း၊မိုးမိုးမြင့်အောင်၊ဇူးဇူးမောင်','review'=>'aaaaaaaa'],
            ['cid'=>'3','moviename'=>'သရီးအိုသရီး','link'=>'https://www.youtube.com/embed/zoANB8Qvcw0' , 'imagename' => '/image/303.jpg','actorname'=>'သူထူးစံ၊စံပယ်မိုး၊ချမ်းမီမိကို','review'=>'aaaaaaaa'], 
            ['cid'=>'3','moviename'=>'တတ်တူး','link'=>'https://www.youtube.com/embed/ZeODdXpbnhY' , 'imagename' => '/image/tatoo.jpg','actorname'=>'နေမင်း၊ခင်လှိုင်၊သင်ဇာ၀င့်ကျော်','review'=>'aaaaaaaa'],
            
            ['cid'=>'4','moviename'=>'သရဲများနှင့်ည','link'=>'https://www.youtube.com/embed/StgD0-coDCU' , 'imagename' => '/image/ghostnight.jpg','actorname'=>'နေမင်း၊သက်မွန်မြင့်','review'=>'aaaaaaaa'],
            ['cid'=>'4','moviename'=>'ဂျပန်တစ္ဆေ','link'=>'https://www.youtube.com/embed/M3zOFuP7dCM' , 'imagename' => '/image/japan.jpg','actorname'=>'ဖိုးသောကြာ၊နေယံ၊မိုးဒီ၊ပပစိုးကြည်','review'=>'aaaaaaaa'],
            ['cid'=>'4','moviename'=>'ဘိုးတော်လူလိမ်နဲ့နှင့်သုဿန်စောင့်မမဲမြာ','link'=>'https://www.youtube.com/embed/i9UBWJOd9Mg', 'imagename' => '/image/mamaeblue.jpg','actorname'=>'လူမင်း၊ခိုင်သင်းကြည်','review'=>'aaaaaaaa'],
            ['cid'=>'4','moviename'=>'မိစ္ဆာဒိဌိ','link'=>'https://www.youtube.com/embed/dc24vV124JA'    , 'imagename' => '/image/masater.jpg','actorname'=>'အာကာမြင့်အောင်','review'=>'aaaaaaaa'],
            ['cid'=>'4','moviename'=>'ရွှေလက်ချည်းပဲလိုက်လာမယ်','link'=>'https://www.youtube.com/embed/_hcuyROCJhg'   , 'imagename' => '/image/a.jpg','actorname'=>'အာကာမြင့်အောင်','review'=>'aaaaaaaa'],
            ['cid'=>'4','moviename'=>'မပြန်လမ်း','link'=>'https://www.youtube.com/embed/YrPckhJq8Jg'     , 'imagename' => '/image/mapyanlan.jpg','actorname'=>'အာကာမြင့်အောင်','review'=>'aaaaaaaa'],
            ['cid'=>'4','moviename'=>'သိမ်၀င်ပုတီး','link'=>'https://www.youtube.com/embed/BZmkFWCZN4U' , 'imagename' => '/image/a1.jpg','actorname'=>'စံပယ်မိုး','review'=>'aaaaaaaa'],
            ['cid'=>'4','moviename'=>'တစ်ဘ၀စံမိကံ','link'=>'https://www.youtube.com/embed/1gaJkyCc52w', 'imagename' => '/image/tabawosan.jpg','actorname'=>'အာကာမြင့်အောင်','review'=>'aaaaaaaa'],
            ['cid'=>'4','moviename'=>'ဘီလူးမ မယ်ကုဝဏ်','link'=>'https://www.youtube.com/embed/H_OGCa_vLK4', 'imagename' => '/image/belue.jpg','actorname'=>'ပန်းအိဇွန်၊ နေရဲလင်း၊ ရွှေရည်မိုးဦး','review'=>'aaaaaaaa'], 
            ['cid'=>'4','moviename'=>'ရှင်ဥပဂုတ္တမထေရ်','link'=>'https://www.youtube.com/embed/o53vQSJwBx8'  , 'imagename' => '/image/chino.jpg','actorname'=>'ကျော်ဇောဟိန်း၊ချစ်စနိုးထွန်း','review'=>'aaaaaaaa'],





                   ]);
    }
}