<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_p');
            $table->string('nama_a');
            $table->string('no_hp');
            $table->text('alamat');
            $table->string('jemput_p');
            $table->string('jemput_a');
            $table->string('identitas');
            $table->integer('id_mobil')->unsigned();
            $table->foreign('id_mobil')->references('id')->on('mobils')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('id_supir')->unsigned();
            $table->foreign('id_supir')->references('id')->on('supirs')->onUpdate('cascade')->onDelete('cascade');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
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
        Schema::dropIfExists('bookings');
    }
}
