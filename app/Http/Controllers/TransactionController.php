<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransactionRequest;
use App\Services\Transaction\TransactionService;
use App\Services\Wallet\WalletService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TransactionController extends Controller
{
    private $transactionService;
    private $walletService;

    public function __construct(TransactionService $transactionService, WalletService $walletService)
    {
        $this->transactionService = $transactionService;
        $this->walletService = $walletService;
    }

    public function store(StoreTransactionRequest $request)
    {
        $data = $request->validated();
        $wallet = $this->walletService->getByUserId($data['user_id']);

        try {
            $kredit = $this->transactionService->kreditTransaction($wallet->id, $data['kredit']);
            $debit = $this->transactionService->debitTransaction($wallet->id, $data['debit']);
            $proc = $this->transactionService->create([
                "user_id" => $data['user_id'],
                "saldo" => ($this->walletService->find($wallet->id))->balance,
                "kredit" => $data['kredit'],
                "debit" => $data['debit'],
                "status" => $data['status'],
            ]);

            if(!$kredit) {
                throw new \Exception("Gagal kredit wallet");
            } else if (!$debit) {
                throw new \Exception("Gagal debit wallet");
            } else if($proc) {
                throw new \Exception("Gagal membuat transaksi");
            }
        } catch (\Exception $e) {
            Log::debug($e->getMessage());
        }

        return back()->with("success-transaction", "Transaksi berhasil dilakukan");
    }

//    public function getTransactionOnDate(Request $request)
//    {
//        $date = $re
//    }
}
