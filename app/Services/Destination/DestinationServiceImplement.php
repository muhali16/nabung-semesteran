<?php

namespace App\Services\Destination;

use App\Repositories\Destination\DestinationRepository;
use App\Services\Service;

class DestinationServiceImplement extends Service implements DestinationService
{
    public $mainRepository;

    public function __construct(DestinationRepository $destinationRepository)
    {
        $this->mainRepository = $destinationRepository;
    }

    public function getAllDestinationsAscByDate()
    {
        return $this->mainRepository->getAllByDateAsc();
    }
}
