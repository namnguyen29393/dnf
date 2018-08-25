<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThongtincuahangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thongtincuahangs', function (Blueprint $table) {
            $table->increments('id_cuahang');
            $table->string('tencuahang')->unique();
            $table->string('tenkhongdau');
            $table->string('diachi');
            $table->time('giomocua');
            $table->time('giodongcua');
            $table->string('anhdaidien');
            $table->tinyInteger('trangthai')->default(1);
            $table->double('lat')->unique();
            $table->double('long')->unique();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id_user')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('thongtincuahangs');
    }
}
