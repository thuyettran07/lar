<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhanVienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NhanVien', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_LoaiNV')->unsigned();
        $table->foreign('id_LoaiNV')->references('id')->on('LoaiNhanVien');
            $table->string('TenNV',256);
            $table->string('MatKhau',12);
            $table->string('GioiTinh',3);
            $table->string('DiaChi',256);
            $table->string('DT',11);
            $table->string('Email',50);
            $table->string('ChucVu',200);
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
        Schema::dropIfExists('NhanVien');
    }
}
