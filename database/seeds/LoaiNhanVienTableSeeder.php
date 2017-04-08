<?php

use Illuminate\Database\Seeder;

class LoaiNhanVienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('LoaiNhanVienTable')->insert([
        		'id'		=>'1',
	            'TenLoaiNV' =>  'Nhân Viên Bán Hàng', 
	            'id_quyen'=>1,
	            'TinhTrang'=>0,
	         	]);
        DB::table('LoaiNhanVienTable')->insert([
        		'id'		=>'2',
	            'TenLoaiNV' =>  'Nhân Viên Kho', 
	            'id_quyen'=>2,
	            'TinhTrang'=>0,
	         	]);
        DB::table('LoaiNhanVienTable')->insert([
        		'id'		=>'3',
	            'TenLoaiNV' =>  'Nhân Viên Đóng Gói Sản Phẩm', 
	            'id_quyen'=>3,
	            'TinhTrang'=>0,
	         	]);
    }
}
