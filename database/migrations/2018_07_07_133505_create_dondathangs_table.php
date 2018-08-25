<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDondathangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dondathangs', function (Blueprint $table) {
            $table->increments('id_ddh');
            $table->integer('sdt')->unique();
            $table->string('diachi');
            $table->integer('tongtien');
            $table->string('ghichu');
            $table->integer('phivc')->default('6000');
            $table->tinyInteger('trangthai')->default('0');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id_user')->on('users')->onDelete('cascade');

            $table->integer('cuahang_id')->unsigned();
            $table->foreign('cuahang_id')->references('id_cuahang')->on('thongtincuahangs')->onDelete('cascade');

            $table->integer('tx_id')->unsigned()->nullable();
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
        Schema::dropIfExists('dondathangs');
    }
}
