<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\User::create([
        //     'name'      => 'admin',
        //     'email'     => 'admin@gmail.com',
        //     'password'  => bcrypt('admin'),
        //     'status'    => '1',
        // ]);
         //Thêm dữ liệu vào bảng group
        DB::table('users')->insert([
        	'id' => 1,
            'name' => 'admin',
            'gender' =>  '1',
            'birthday' =>'1995/12/02',
            'email' => 'lyvo0212@gmail.com',
            'password' => bcrypt('123456'),
            'address'=>'09 le hong phong',
            'phone'=>'0976655555',
            'status'=>'1',
        ]);	
        DB::table('users')->insert([
            'id' => 2,
            'name' => 'user',
            'gender' =>'0',
            'birthday' =>'1995/12/02',
            'email' => 'thoavo@gmail.com',
            'password' => bcrypt('123456'), 
              'address'=>'09 le hong phong',
            'phone'=>'0976655555',
            'status'=>'0',
        ]); 
    
    }
}
