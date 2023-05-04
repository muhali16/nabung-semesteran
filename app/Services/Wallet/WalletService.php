<?php

namespace App\Services\Wallet;

interface WalletService extends \App\Services\BaseService {
    public function getByUserId($id);

}
