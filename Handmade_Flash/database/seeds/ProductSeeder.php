<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	['name' => 'Quần short kaki','cate_id'=>'1','description'=>'TC1025011BA','unit_price'=>'398000' ,'promotion_price'=>'400000','image'=>'image1.jpg','disabled_center'=>'image1.jpg', 'status'=>'1','start_date'=>'2006-12-30','end_date'=>'2006-12-30'],
        	['name' => 'Quần baggy đen','cate_id'=>'1','description'=>'TC1025221BA','unit_price'=>'508000' ,'promotion_price'=>'460000','image'=>'image2.jpg','disabled_center'=>'image1.jpg','status'=>'0','start_date'=>'2006-12-30','end_date'=>'2006-12-30'],

        ]);
    }
}

