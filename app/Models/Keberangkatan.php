<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Keberangkatan extends Model
{

    public $table = 'keberangkatans';



    public $fillable = [
        'username',
        'id_keberangkatan',
        'id_jamaah',
        'id_hotel',
        'tanggal_keberangkatan',
        'maskapai',
        'lama',
        'total_kuota_seat',
        'asuransi_perjalanan',
        'no_seat_pesawat',
        'penaggung_jawab',
        'id_layanan',
        'catatan',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'username' => 'string',
        'id_keberangkatan' => 'string',
        'id_jamaah' => 'string',
        'id_hotel' => 'string',
        'maskapai' => 'string',
        'lama' => 'string',
        'total_kuota_seat' => 'string',
        'asuransi_perjalanan' => 'string',
        'no_seat_pesawat' => 'string',
        'penaggung_jawab' => 'string',
        'id_layanan' => 'string',
        'catatan' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];
}
