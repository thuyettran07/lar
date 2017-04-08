<?php

use Illuminate\Database\Seeder;

class SlideshowTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('SlideshowTable')->insert([
        		'id'		=>'1',
	            'TenSlide' =>  'slide 1', 
	            'BiDanh'=>'slide 1',
	            'Hinh'=>'slide1.jpg',
	            'TinhTrang'=>0
	         	]);    

        DB::table('SlideshowTable')->insert([
        		'id'		=>'2',
	            'TenSlide' =>  'slide 2', 
	            'BiDanh'=>'slide 2',
	            'Hinh'=>'slide2.jpg',
	            'TinhTrang'=>0
	         	]);    

        DB::table('SlideshowTable')->insert([
        		'id'		=>'3',
	            'TenSlide' =>  'slide 3', 
	            'BiDanh'=>'slide 3',
	            'Hinh'=>'slide3.jpg',
	            'TinhTrang'=>0
	         	]);    
}
