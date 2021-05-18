<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Products')->insert([
            
                [
                    "name"=> 'Zero-fly storage bags',
                    "price" =>"10",
                     "description"=>"Safety storing your grains",
                     "category"=>"Grains Storage",
                     "gallery"=>"http://cbf.co.ke/images/iacfmain3.jpg"
                    
                ] ,
                [
                    "name"=> 'Livestock net',
                    "price" =>"250 per metre",
                     "description"=>"Less flies and better milk",
                     "category"=>"Livestock",
                     "gallery"=>"http://cbf.co.ke/images/livestockbanner.jpg"
                    
                ],
                
            
        ]);
    }
}
