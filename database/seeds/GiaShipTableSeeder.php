<?php

use Illuminate\Database\Seeder;

class GiaShipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('GiaShipTable')->insert([
        		'id'		=>'1',
	            'TenTinh' =>  'Hồ Chí Minh',
	            'GiaShip'=>15000
	            
	          
        	]);
        		DB::table('GiaShipTable')->insert([
        		'id'		=>'2',
	            'TenTinh' =>  'Lào Cai',
	            'GiaShip'=>35000
	            
	          
        	]);
        				DB::table('GiaShipTable')->insert([
        		'id'		=>'3',
	            'TenTinh' =>  'Huế',
	            'GiaShip'=>25000
	            
	          
        	]);
        						DB::table('GiaShipTable')->insert([
        		'id'		=>'4',
	            'TenTinh' =>  'Bình Định',
	            'GiaShip'=>15000
	            
	          
        	]);
        								DB::table('GiaShipTable')->insert([
        		'id'		=>'5',
	            'TenTinh' =>  'Vĩnh Long',
	            'GiaShip'=>25000
	            
	          
        	]);
        										DB::table('GiaShipTable')->insert([
        		'id'		=>'6',
	            'TenTinh' =>  'Tiền Giang',
	            'GiaShip'=>25000
	            
	          
        	]);
    }
}
