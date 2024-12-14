<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Bank extends Model
{

    public $table = 'banks';
    


    public $fillable = [
        'kode_bank',
        'nama_bank'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'kode_bank' => 'string',
        'nama_bank' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
