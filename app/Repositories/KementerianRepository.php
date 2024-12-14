<?php

namespace App\Repositories;

use App\Models\Kementerian;
use InfyOm\Generator\Common\BaseRepository;

class KementerianRepository extends BaseRepository
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
        return Kementerian::class;
    }
}
