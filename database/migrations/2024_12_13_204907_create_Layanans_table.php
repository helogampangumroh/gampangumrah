<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLayanansTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Layanans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_layanan')->nullable();
            $table->string('nama')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('total_hari')->nullable();
            $table->string('keberangkatan')->nullable();
            $table->string('hotel')->nullable();
            $table->string('include')->nullable();
            $table->integer('harga')->nullable();
            $table->integer('diskon')->nullable();
            $table->string('maskapai')->nullable();
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
        Schema::drop('Layanans');
    }
}
