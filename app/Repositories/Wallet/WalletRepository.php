<?php

namespace App\Repositories\Wallet;



interface WalletRepository extends \App\Repositories\Repository {

    public function getByUserId($id);
}
