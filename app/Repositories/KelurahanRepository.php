<?php

namespace App\Repositories;

use App\Models\Kelurahan;
use InfyOm\Generator\Common\BaseRepository;

class KelurahanRepository extends BaseRepository
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
        return Kelurahan::class;
    }
}
