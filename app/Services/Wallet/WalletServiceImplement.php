<?php

namespace App\Services\Wallet;

use App\Repositories\Wallet\WalletRepository;

class WalletServiceImplement extends \App\Services\Service implements WalletService{

     /**
     * don't change $this->mainRepository variable name
     * because used in extends service class
     */
     protected $mainRepository;

    public function __construct(WalletRepository $mainRepository)
    {
      $this->mainRepository = $mainRepository;
    }

    public function getByUserId($id)
    {
        $wallet = $this->mainRepository->getByUserId($id);
        return $wallet;
    }
}
