<?php

use Illuminate\Database\Seeder;

class LoaiKhoiLuongTinhTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('LoaiKhoiLuongTinhTable')->insert([
        		'id'		=>'1',
	            'TenLoaiKLT' =>  'gói'
        	]);
         DB::table('LoaiKhoiLuongTinhTable')->insert([
        		'id'		=>'2',
	            'TenLoaiKLT' =>  'hũ'
        	]);
         DB::table('LoaiKhoiLuongTinhTable')->insert([
        		'id'		=>'3',
	            'TenLoaiKLT' =>  'lọ',
        	]);
         DB::table('LoaiKhoiLuongTinhTable')->insert([
        		'id'		=>'4',
	            'TenLoaiKLT' =>  'chai'
        	]);
         DB::table('LoaiKhoiLuongTinhTable')->insert([
        		'id'		=>'5',
	            'TenLoaiKLT' =>  'hộp'
        	]);
         DB::table('LoaiKhoiLuongTinhTable')->insert([
        		'id'		=>'6',
	            'TenLoaiKLT' =>  'vỉ'
        	]);
           DB::table('LoaiKhoiLuongTinhTable')->insert([
        		'id'		=>'7',
	            'TenLoaiKLT' =>  'viên'
        	]);

    }
}
