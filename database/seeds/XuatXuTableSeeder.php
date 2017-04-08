<?php

use Illuminate\Database\Seeder;
use App\XuatXu;
class XuatXuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        public function run()
    {
         DB::table('XuatXuTable')->insert([
        		'id'		=>'1',
	            'TenXuatxu' =>  'Hàn Quốc', 
	            'BiDanh'=>"hq",
	            
	         	]);
          DB::table('XuatXuTable')->insert([
        		'id'		=>'2',
	            'TenXuatxu' =>  'Nhật Bản', 
	            'BiDanh'=>"nb",
	            
	         	]);
           DB::table('XuatXuTable')->insert([
        		'id'		=>'3',
	            'TenXuatxu' =>  'Pháp', 
	            'BiDanh'=>"p",
	            
	         	]);
            DB::table('XuatXuTable')->insert([
        		'id'		=>'4',
	            'TenXuatxu' =>  'Anh', 
	            'BiDanh'=>"a",
	            
	         	]);
            DB::table('XuatXuTable')->insert([
        		'id'		=>'5',
	            'TenXuatxu' =>  'Mỹ', 
	            'BiDanh'=>"M",
	            
	         	]);
            DB::table('XuatXuTable')->insert([
        		'id'		=>'6',
	            'TenXuatxu' =>  'Trung Quốc', 
	            'BiDanh'=>"tq",
	            
	         	]);

    }
    }
}
