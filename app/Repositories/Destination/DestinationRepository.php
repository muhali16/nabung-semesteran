<?php

namespace App\Repositories\Destination;

use App\Repositories\Repository;

interface DestinationRepository extends Repository
{
    public function getAllByDateAsc();
}
