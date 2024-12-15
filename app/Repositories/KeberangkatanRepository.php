<?php

namespace App\Repositories;

use App\Models\Keberangkatan;
use InfyOm\Generator\Common\BaseRepository;

class KeberangkatanRepository extends BaseRepository
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
        return Keberangkatan::class;
    }
}
