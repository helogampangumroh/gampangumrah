<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Payment extends Model
{

    public $table = 'Payments';



    public $fillable = [
        'kode',
        'nama_bank_jamaah',
        'bank_atas_nama_jamaah',
        'nomor_rek_bank_jamaah',
        'nominal_pembayaran',
        'tanggal_pembayaran',
        'catatan',
        'nama_bank_tujuan',
        'no_rek_tujuan',
        'atas_nama_rek_tujuan',
        'potongan_admin'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'kode' => 'string',
        'nama_bank_jamaah' => 'string',
        'bank_atas_nama_jamaah' => 'string',
        'nomor_rek_bank_jamaah' => 'string',
        'nominal_pembayaran' => 'string',
        'tanggal_pembayaran' => 'string',
        'catatan' => 'string',
        'nama_bank_tujuan' => 'string',
        'no_rek_tujuan' => 'string',
        'atas_nama_rek_tujuan' => 'string',
        'potongan_admin' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];
}
