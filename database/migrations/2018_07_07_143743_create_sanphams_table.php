<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanphamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanphams', function (Blueprint $table) {
            $table->increments('id_sp');
            $table->string('tensp')->unique();
            $table->string('tenkhongdau');
            //$table->string('phanloai')->unique();
            $table->integer('giasp');
            $table->string('hinhanh');
            $table->integer('loaisp_id')->unsigned();
            $table->foreign('loaisp_id')->references('id_loaisp')->on('loaisanphams')->onDelete('cascade');

            $table->integer('cuahang_id')->usigned();
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
        Schema::dropIfExists('sanphams');
    }
}
