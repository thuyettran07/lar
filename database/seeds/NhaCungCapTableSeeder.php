<?php

use Illuminate\Database\Seeder;

class NhaCungCapTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('NhaCungCapTable')->insert([
        		'id'		=>'1',
	            'TenNCC' =>  'Thái Hà Retail 2',
	            'DiaChi' =>'781 Phố Núi, Quận 1, Tp.HCM',
	            'DT' => '0981252141',
	            
	          
        	]);


        DB::table('NhaCungCapTable')->insert([
        		'id'		=>'2',
	            'TenNCC' =>  'Minh Thanh ',
	            'DiaChi' =>'69 Thái Hà, Thanh Xuân, Cầu Giấy, Hà Nội',
	            'DT' => '0918241344',
	            
	          
        	]);

        DB::table('NhaCungCapTable')->insert([
        		'id'		=>'3',
	            'TenNCC' =>  'Mingo Retail',
	            'DiaChi' =>'775 Thái Sơn, Huế, Thừa Thiên Huế',
	            'DT' => '01235152122',
	            
	          
        	]);

        DB::table('NhaCungCapTable')->insert([
        		'id'		=>'4',
	            'TenNCC' =>  'Bạch Gia Trang',
	            'DiaChi' =>'812 Kinh Châu, Đốc Thủy, Gia Thành',
	            'DT' => '0928916581',
	            
	          
        	]);
    }
}
