<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhachHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('KhachHang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TenKH',150);
            $table->string('MatKhau',12);
            $table->string('GioiTinh',3);
            $table->date('NgaySinh');
            $table->string('DT',11);
            $table->string('DiaChi',100);
            $table->string('Email',50);
            $table->integer('TongXu');
            $table->boolean('TinhTrang');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('KhachHang');
    }
}
