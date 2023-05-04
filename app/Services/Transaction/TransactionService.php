<?php

namespace App\Services\Transaction;

interface TransactionService extends \App\Services\BaseService {

    public function getByUserId($id);

    public function kreditTransaction($walletId, $kreditNominal);
    public function debitTransaction($walletId, $debitNominal);
    public function getTransactionNewly();
    public function userTransactionByDay($date, $userId): array;
}
