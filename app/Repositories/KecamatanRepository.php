<?php

namespace App\Repositories;

use App\Models\Kecamatan;
use InfyOm\Generator\Common\BaseRepository;

class KecamatanRepository extends BaseRepository
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
        return Kecamatan::class;
    }
}
