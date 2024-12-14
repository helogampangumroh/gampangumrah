<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Kota extends Model
{

    public $table = 'kotas';



    public $fillable = [
        'kode_kota',
        'judul'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'kode_kota' => 'string',
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
