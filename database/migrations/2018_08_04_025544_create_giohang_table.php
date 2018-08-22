<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiohangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giohang', function (Blueprint $table) {
            $table->increments('id_giohang');
            // $table->integer('sdt')->unique();
            $table->integer('phivc')->default('6000');
            $table->string('tensp');
            $table->integer('soluong')->unsined();
            $table->integer('giasp');
            $table->timestamps();
            $table->integer('sp_id')->unsigned();
            $table->foreign('sp_id')->references('id_sp')->on('sanphams')->onDelete('cascade');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id_user')->on('users')->onDelete('cascade');
            $table->integer('cuahang_id')->unsigned();
            $table->foreign('cuahang_id')->references('id_cuahang')->on('thongtincuahangs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('giohang');
    }
}
