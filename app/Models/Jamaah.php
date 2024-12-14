<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Jamaah extends Model
{

    public $table = 'Jamaahs';
    


    public $fillable = [
        'id_user',
        'id_kementerian',
        'nama_lengkap',
        'noktp',
        'nopaspor',
        'tgl_lahir',
        'tempat_lahir',
        'jeniskelamin',
        'status_pernikahan',
        'telp',
        'whatsapp',
        'akunig',
        'akunfb',
        'id_rekening',
        'id_layanan',
        'id_payment',
        'id_keberangkatan',
        'id_files',
        'status',
        'no_invoice',
        'total_harga',
        'dp',
        'catatan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_user' => 'string',
        'id_kementerian' => 'string',
        'nama_lengkap' => 'string',
        'noktp' => 'integer',
        'nopaspor' => 'string',
        'tempat_lahir' => 'string',
        'jeniskelamin' => 'string',
        'status_pernikahan' => 'string',
        'telp' => 'integer',
        'whatsapp' => 'integer',
        'akunig' => 'string',
        'akunfb' => 'string',
        'id_rekening' => 'string',
        'id_layanan' => 'string',
        'id_payment' => 'string',
        'id_keberangkatan' => 'string',
        'id_files' => 'string',
        'status' => 'string',
        'no_invoice' => 'string',
        'total_harga' => 'string',
        'dp' => 'string',
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
