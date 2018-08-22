<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitiets', function (Blueprint $table) {
            $table->increments('id_chitiet');
            $table->integer('giasp');
            $table->integer('ddh_id')->unsigned();
            $table->foreign('ddh_id')->references('id_ddh')->on('dondathangs')->onDelete('cascade');
            $table->integer('sp_id')->unsigned();
            $table->foreign('sp_id')->references('id_sp')->on('sanphams')->onDelete('cascade');
            $table->integer('cuahang_id')->unsigned();
            $table->foreign('cuahang_id')->references('id_cuahang')->on('thongtincuahangs')->onDelete('cascade');
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
        Schema::dropIfExists('chitiets');
    }
}
