<?php

namespace App\Repositories;

use App\Models\Layanan;
use InfyOm\Generator\Common\BaseRepository;

class LayananRepository extends BaseRepository
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
        return Layanan::class;
    }
}
