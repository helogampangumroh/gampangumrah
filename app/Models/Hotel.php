<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Hotel extends Model
{

    public $table = 'Hotels';
    


    public $fillable = [
        'username',
        'id_hotel',
        'nama_hotel',
        'bintang',
        'alamat',
        'fasilitas',
        'total_tamu_perroom',
        'jenis_tempat_tidur',
        'nama_kamar',
        'total_kamar',
        'catatan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'username' => 'string',
        'id_hotel' => 'string',
        'nama_hotel' => 'string',
        'bintang' => 'string',
        'alamat' => 'string',
        'fasilitas' => 'string',
        'total_tamu_perroom' => 'string',
        'jenis_tempat_tidur' => 'string',
        'nama_kamar' => 'string',
        'total_kamar' => 'string',
        'catatan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
