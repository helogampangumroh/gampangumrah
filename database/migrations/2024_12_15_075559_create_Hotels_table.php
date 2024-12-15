<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHotelsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->nullable();
            $table->string('id_hotel')->nullable();
            $table->string('nama_hotel')->nullable();
            $table->string('bintang')->nullable();
            $table->string('alamat')->nullable();
            $table->string('fasilitas')->nullable();
            $table->string('total_tamu_perroom')->nullable();
            $table->string('jenis_tempat_tidur')->nullable();
            $table->string('nama_kamar')->nullable();
            $table->string('total_kamar')->nullable();
            $table->string('catatan')->nullable();
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
        Schema::drop('Hotels');
    }
}
