<?php

namespace App\Repositories\Destination;

use App\Models\Destination;
use App\Repositories\Eloquent;

class DestinationRepositoryImplement extends Eloquent implements DestinationRepository
{
    public $model;
    public function __construct(Destination $destination)
    {
        $this->model = $destination;
    }

    public function getAllByDateAsc()
    {
        return $this->model->orderBy("tanggal_kunjungan", "asc")->get();
    }
}
