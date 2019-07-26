<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['categoryname'=>'ဟာသဇာတ်လမ်း'],
            ['categoryname'=>'အချစ်ဇာတ်လမ်း'],
            ['categoryname'=>'အကြမ်းဇာတ်လမ်း'],
            ['categoryname'=>'ကြောက်မက်ဖွယ်ရာဇာတ်လမ်း'],

        ]);
    }
}
