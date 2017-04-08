<?php

use Illuminate\Database\Seeder;

class HinhThucThanhToanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('HinhThucThanhToanTable')->insert([
        		'id'		=>'1',
	            'TenHinhThuc' =>  'Thanh Toán Qua Thẻ',            
	          
        	]);
                DB::table('HinhThucThanhToanTable')->insert([
        		'id'		=>'2',
	            'TenHinhThuc' =>  'Tiền Mat',            
	          
        	]);
                        DB::table('HinhThucThanhToanTable')->insert([
        		'id'		=>'3',
	            'TenHinhThuc' =>  'Chuyển Khoản',            
	          
        	]);
    }
}
