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
            ['cid'=>'1','moviename'=>'နှင်းဆီကွန်ယက်','link'=>'https://www.youtube.com/embed/VfT8fm7pmnk','imagename' => '/image/rose.jpg','actorname'=>'အောင်ရဲလင်း၊ပက်ထရစ်ရှာ','review'=>'aaaaaaaa'],
            ['cid'=>'1','moviename'=>'ရည်းစားထားတဲ့ဂိမ်း','link'=>'https://www.youtube.com/embed/t76iQMFXk7Q' , 'imagename' => '/image/yeesar.jpg' ,'actorname'=>'မြင့်မြတ်၊နေဒွေး၊ညီထွဋ်ခေါင်၊ရွှေမှုံရတီ','review'=>'aaaaaaaa'],        
            ['cid'=>'1','moviename'=>'ဟင့်အင်း','link'=>'https://www.youtube.com/embed/4u9R7ou30SQ' , 'imagename' => '/image/hininn.jpg' ,'actorname'=>'မြင့်မြတ်၊ခိုင်သင်းကြည်','review'=>'aaaaaaaa'],
            ['cid'=>'1','moviename'=>'သားသမီးတို့၀တ်တရားရှိသည့်အတိုင်း','link'=>'https://www.youtube.com/embed/VlCXJJrJnW0', 'imagename' => '/image/thartame.jpg' ,'actorname'=>'မြင့်မြတ်၊နေအောင်၊ချမ်းမီမိကို၊စိုးမြတ်သူဇာ','review'=>'aaaaaaaa'],
            ['cid'=>'1','moviename'=>'ကြောင်နှင့်ကြွက်','link'=>'https://www.youtube.com/embed/z1UrZaRugsQ' , 'imagename' => '/image/catandmouse.jpg' ,'actorname'=>'မြင့်မြတ်၊သက်မွန်မြင့်','review'=>'aaaaaaaa'],
            ['cid'=>'1','moviename'=>'လွှတ်ပါတော်','link'=>'https://www.youtube.com/embed/jSERPgEn6bM' , 'imagename' => '/image/lattpartaw.png' ,'actorname'=>'နေတိုး၊ကျော်ကျော်ဗိုလ်၊သက်မွန်မြင့်၊ရွှေမှုံရတီ','review'=>'aaaaaaaa'],
            ['cid'=>'1','moviename'=>'လူပျိုကြီး၏ဖူးစာအလွဲ','link'=>'https://www.youtube.com/embed/XywYHwlriWo' , 'imagename' => '/image/lupyogyi.png' ,'actorname'=>'ကျော်ရဲအောင်၊စိုးမြတ်နန္ဒာ','review'=>'aaaaaaaa'],
            ['cid'=>'1','moviename'=>'တလွဲစိန်','link'=>'https://www.youtube.com/embed/s6I7J76wMtM' ,'imagename' => '/image/talaesein.jpg' ,'actorname'=>'ပြေတီဦး၊အိချောပို၊ရွှေပိုးအိမ်','review'=>'aaaaaaaa'],
            ['cid'=>'1','moviename'=>'အထီးမှုံ','link'=>'https://www.youtube.com/embed/B09q8SYBZ-0', 'imagename' => '/image/ahteehmone.jpg','actorname'=>'မင်းမော်ကွန်း၊သွန်းဆက်','review'=>'aaaaaaaa'], 
            ['cid'=>'1','moviename'=>'ချုပ်ဆေး','link'=>'https://www.youtube.com/embed/VQZDq9F1Ti4', 'imagename' => '/image/chotesae.jpg','actorname'=>'ဇေရဲထက်၊ဖွေးဖွေး','review'=>'aaaaaaaa'],

           

            ['cid'=>'2','moviename'=>'ဒေါင်းယဥ်ပျံနံဘေးမှာစာရေးလို့ထားချင်တယ်','link'=>'https://www.youtube.com/embed/gipV2OMzp0g', 'imagename' =>'/image/down.jpg','actorname'=>'ဟိန်း၀ေယံ၊သင်ဇာ၀င့်ကျော်','review'=>'aaaaaaaa'],
            ['cid'=>'2','moviename'=>'ခရေပုံပြင်','link'=>'https://www.youtube.com/embed/OagtxiJOYzM' ,'imagename' => '/image/kayapopyin.jpg','actorname'=>'ဟိန်း၀ေယံ၊မိုးဟေကို','review'=>'aaaaaaaa'],
            ['cid'=>'2','moviename'=>'ကြည်ဖြူစွာချစ်ခွင့်','link'=>'https://www.youtube.com/embed/phfUFBGoPlc' , 'imagename' => '/image/kyiphyu.jpg','actorname'=>'ဟိန်း၀ေယံ၊သင်ဇာ၀င့်ကျော်၊စိုးပြည့်သဇင်','review'=>'aaaaaaaa'],
            ['cid'=>'2','moviename'=>'အ၀ေးဆုံးမှာ','link'=>'https://www.youtube.com/embed/5IB4z4C856Q' , 'imagename' => '/image/away.jpg','actorname'=>'အောင်ရဲလင်း၊စိုးပြည့်သဇင်','review'=>'aaaaaaaa'],
            ['cid'=>'2','moviename'=>'ရှင့်အမေနဲ့ကျမ','link'=>'https://www.youtube.com/embed/c_YWv5rllms', 'imagename' => '/image/motherandme.jpg','actorname'=>'သူရိယ၊စုအိမ်စံ၊ခိုင်နှင်း၀ေ','review'=>'aaaaaaaa'],
            ['cid'=>'2','moviename'=>'လိပ်ပြာ','link'=>'https://www.youtube.com/embed/zRuKZK2ycfM'  , 'imagename' => '/image/lateblue.jpg','actorname'=>'ပြေတီဦး၊၀တ်မှုံရွှေရည်၊ခိုင်နှင်း၀ေ','review'=>'aaaaaaaa'],
            ['cid'=>'2','moviename'=>'အမွေ','link'=>'https://www.youtube.com/embed/n1avcXYhgaM' , 'imagename' => '/image/am.jpg','actorname'=>'ပြေတီဦး၊ထွန်အိန္ဒြာဗိုလ်','review'=>'aaaaaaaa'],
            ['cid'=>'2','moviename'=>'ကြွေမွအသည်း','link'=>'https://www.youtube.com/embed/-bJTTmO_qOg' , 'imagename' => '/image/a.jpg','actorname'=>'ပြေတီဦး၊သက်မွန်မြင့်၊န၀ရတ်','review'=>'aaaaaaaa'],
            ['cid'=>'2','moviename'=>'က၀ေချိုးတဲ့ဖဲ','link'=>'https://www.youtube.com/embed/l9Gmfw4_FSY', 'imagename' => '/image/a.jpg','actorname'=>'ဇေရဲထက်၊စိုးမြတ်နန္ဒာ','review'=>'aaaaaaaa'], 
            ['cid'=>'2','moviename'=>'နတ်သမီးချည်တဲ့ကြိုး','link'=>'https://www.youtube.com/embed/uYJ75di6hrI', 'imagename' => '/image/natttame.jpg','actorname'=>'ပြေတီဦး၊သက်မွန်မြင့်','review'=>'aaaaaaaa'],


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