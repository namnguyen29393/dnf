<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThongtinLoaicuahangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thongtin_loaicuahangs', function (Blueprint $table) {
            //$table->increments('id');
            $table->integer('cuahang_id')->unsigned();
            $table->foreign('cuahang_id')->references('id_cuahang')->on('thongtincuahangs')->onDelete('cascade');
            $table->integer('loaicuahang_id')->unsigned();
            $table->foreign('loaicuahang_id')->references('id_loaicuahang')->on('loaicuahangs')->onDelete('cascade');
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
        Schema::dropIfExists('thongtin_loaicuahangs');
    }
}
