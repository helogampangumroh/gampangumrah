<?php

namespace App\Repositories;

use App\Models\Jamaah;
use InfyOm\Generator\Common\BaseRepository;

class JamaahRepository extends BaseRepository
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
        return Jamaah::class;
    }
}
