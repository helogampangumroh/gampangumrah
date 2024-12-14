<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Provinsi extends Model
{

    public $table = 'provinsi';
    


    public $fillable = [
        'kode_provinsi',
        'judul'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'kode_provinsi' => 'string',
        'judul' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
