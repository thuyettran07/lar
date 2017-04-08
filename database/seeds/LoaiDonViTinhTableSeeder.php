<?php

use Illuminate\Database\Seeder;

class LoaiDonViTinhTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('LoaiDonViTinhTable')->insert([
        		'id'		=>'1',
	            'TenLoaiDVT' =>  'gam',
        	]);
        B::table('LoaiDonViTinhTable')->insert([
        		'id'		=>'2',
	            'TenLoaiDVT' =>  'ml',
        	]);
        B::table('LoaiDonViTinhTable')->insert([
        		'id'		=>'3',
	            'TenLoaiDVT' =>  'kilogam',

        	]);
        B::table('LoaiDonViTinhTable')->insert([
        		'id'		=>'4',
	            'TenLoaiDVT' =>  'litre',
	            
	          
        	]);
    }
}
