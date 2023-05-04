<?php

namespace App\Repositories\Transaction;

use App\Repositories\Repository;

interface TransactionRepository extends Repository {

    public function getByUserId($id);
    public function allTransactionDateNewly();
//    public function dailyUserTransaction($date);
}
