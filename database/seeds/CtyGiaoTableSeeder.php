<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CtyGiaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('CtyGiaoTable')->insert([
        		'id'		=>'1',
	            'TenCty' =>  'Công ty vận chuyển Đại Minh',
	            
	          
        	]);
          DB::table('CtyGiaoTable')->insert([
        		'id'		=>'2',
	            'TenCty' =>  'Công ty vận chuyển nhanh Công Tạo',
	            
	          
        	]);
            DB::table('CtyGiaoTable')->insert([
        		'id'		=>'3',
	            'TenCty' =>  'Công ty vận chuyển HugoSafari',
	            
	          
        	]);
        	  DB::table('CtyGiaoTable')->insert([
        		'id'		=>'4',
	            'TenCty' =>  'Công ty vận chuyển nhanh Gia Bảo',
	            
	          
        	]);
    }
}
