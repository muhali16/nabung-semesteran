<?php

namespace App\Http\Controllers;

use App\Services\Transaction\TransactionService;
use App\Services\User\UserService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $userService;
    private $transactionService;

    public function __construct(UserService $userService, TransactionService $transactionService)
    {

        $this->userService = $userService;
        $this->transactionService = $transactionService;
    }

    public function index(Request $request)
    {
        $transaction = $this->transactionService->getByUserId(auth()->user()->id);
        if(isset($request->td)) {
            $transaction = $this->transactionService->userTransactionByDay($request->td, auth()->user()->id);
        }
        return view("dashboard.index", [
            "transactions" => $transaction,
        ]);
    }

    public function admin()
    {
        $this->authorize("is_admin");
        return view("dashboard.administrator.index", [
            "transactions" => $this->transactionService->getTransactionNewly(),
            'users' => $this->userService->all(),
        ]);
    }

    public function users()
    {
        $this->authorize("is_admin");
        return view("dashboard.users.index", [
            "users" => $this->userService->all(),
        ]);
    }
}
