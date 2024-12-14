<?php

namespace App\Repositories;

use App\Models\Kota;
use InfyOm\Generator\Common\BaseRepository;

class KotaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Kota::class;
    }
}
