<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJamaahsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Jamaahs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_user')->nullable();
            $table->string('id_kementerian')->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->integer('noktp')->nullable();
            $table->string('nopaspor')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('jeniskelamin')->nullable();
            $table->string('status_pernikahan')->nullable();
            $table->integer('telp')->nullable();
            $table->integer('whatsapp')->nullable();
            $table->string('akunig')->nullable();
            $table->string('akunfb')->nullable();
            $table->string('id_rekening')->nullable();
            $table->string('id_layanan')->nullable();
            $table->string('id_payment')->nullable();
            $table->string('id_keberangkatan')->nullable();
            $table->string('id_files')->nullable();
            $table->string('status')->nullable();
            $table->string('no_invoice')->nullable();
            $table->string('total_harga')->nullable();
            $table->string('dp')->nullable();
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
        Schema::drop('Jamaahs');
    }
}
