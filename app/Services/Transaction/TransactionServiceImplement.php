<?php

namespace App\Services\Transaction;

use App\Models\Wallet;
use App\Repositories\Transaction\TransactionRepository;

class TransactionServiceImplement extends \App\Services\Service implements TransactionService{

     /**
     * don't change $this->mainRepository variable name
     * because used in extends service class
     */
     protected $mainRepository;

    public function __construct(TransactionRepository $mainRepository)
    {
      $this->mainRepository = $mainRepository;
    }

    public function getByUserId($id)
    {
        return $this->mainRepository->getByUserId($id);
    }

    public function kreditTransaction($walletId, $kreditNominal)
    {
        $wallet = Wallet::find($walletId);
        $balance = $wallet->balance + $kreditNominal;
        $update = $wallet->update([
            "balance" => $balance,
        ]);
        if (!$update) {
            return false;
        }

        return true;
    }

    public function debitTransaction($walletId, $debitNominal)
    {
        $wallet = Wallet::find($walletId);
        $balance = $wallet->balance - $debitNominal;
        $update = $wallet->update([
            "balance" => $balance,
        ]);

        if (!$update) {
            return false;
        }

        return true;
    }

    public function getTransactionNewly()
    {
        return $this->mainRepository->allTransactionDateNewly();
    }

    public function userTransactionByDay($date, $userId): array
    {
        $date = date("Y-m-d 00:00:00", strtotime($date));
        $userTransactions = $this->mainRepository->getByUserId($userId);
        $data = [];
        foreach ($userTransactions as $transaction){
            $transactionDate = date('Y-m-d 00:00:00', strtotime($transaction->created_at));
            if ($transactionDate == $date)
            {
                $data[] = $transaction;
            }
        }

        return $data;
    }
}
