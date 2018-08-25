<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaisanphamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaisanphams', function (Blueprint $table) {
            $table->increments('id_loaisp');
            $table->string('tenloaisp')->unique();
            $table->string('tenkhongdau');
            // $table->integer('cuahang_id')->usigned();
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
        Schema::dropIfExists('loaisanphams');
    }
}
