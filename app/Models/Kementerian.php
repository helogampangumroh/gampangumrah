<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Kementerian extends Model
{

    public $table = 'Kementerians';
    


    public $fillable = [
        'kode_kementerian',
        'nama_kementerian',
        'catatan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'kode_kementerian' => 'integer',
        'nama_kementerian' => 'string',
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
