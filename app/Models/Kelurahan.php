<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Kelurahan extends Model
{

    public $table = 'kelurahan';
    


    public $fillable = [
        'kode_kelurahan',
        'judul'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'kode_kelurahan' => 'string',
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
