<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('id_galeri')->unsigned();
            $table->foreign('id_galeri')->references('id')->on('galeris')->onUpdate('cascade')->onDelete('cascade');
            $table->string('merk');
            $table->string('plat_no');
            $table->integer('kapasitas');
            $table->date('tahun_kel');
            $table->integer('harga');
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
        Schema::dropIfExists('mobils');
    }
}
