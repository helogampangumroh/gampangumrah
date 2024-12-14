<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Kecamatan extends Model
{

    public $table = 'Kecamatan';
    


    public $fillable = [
        'kode_kecamatan',
        'judul'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'kode_kecamatan' => 'string',
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
