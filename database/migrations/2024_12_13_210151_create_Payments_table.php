<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_bank_jamaah')->nullable();
            $table->string('bank_atas_nama_jamaah')->nullable();
            $table->string('nomor_rek_bank_jamaah')->nullable();
            $table->string('nominal_pembayaran')->nullable();
            $table->string('tanggal_pembayaran')->nullable();
            $table->string('catatan')->nullable();
            $table->string('nama_bank_tujuan')->nullable();
            $table->string('no_rek_tujuan')->nullable();
            $table->string('atas_nama_rek_tujuan')->nullable();
            $table->string('potongan_admin')->nullable();
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
        Schema::drop('Payments');
    }
}
