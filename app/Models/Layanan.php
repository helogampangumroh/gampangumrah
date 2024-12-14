<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Layanan extends Model
{

    public $table = 'Layanans';
    


    public $fillable = [
        'kode_layanan',
        'nama',
        'deskripsi',
        'total_hari',
        'keberangkatan',
        'hotel',
        'include',
        'harga',
        'diskon',
        'maskapai'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'kode_layanan' => 'string',
        'nama' => 'string',
        'deskripsi' => 'string',
        'total_hari' => 'string',
        'keberangkatan' => 'string',
        'hotel' => 'string',
        'include' => 'string',
        'harga' => 'integer',
        'diskon' => 'integer',
        'maskapai' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
