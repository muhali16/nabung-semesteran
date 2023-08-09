<?php

namespace App\Services\Destination;

use App\Services\BaseService;

interface DestinationService extends BaseService
{
    public function getAllDestinationsAscByDate();

}
