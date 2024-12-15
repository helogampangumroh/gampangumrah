<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKeberangkatansTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keberangkatans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_keberangkatan')->nullable();
            $table->string('id_jamaah')->nullable();
            $table->string('id_hotel')->nullable();
            $table->date('tanggal_keberangkatan')->nullable();
            $table->string('maskapai')->nullable();
            $table->string('lama')->nullable();
            $table->string('total_kuota_seat')->nullable();
            $table->string('asuransi_perjalanan')->nullable();
            $table->string('no_seat_pesawat')->nullable();
            $table->string('penaggung_jawab')->nullable();
            $table->string('id_layanan')->nullable();
            $table->string('catatan')->nullable();
            $table->string('status')->nullable();
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
        Schema::drop('keberangkatans');
    }
}
