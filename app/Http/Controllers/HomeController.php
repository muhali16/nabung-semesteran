<?php

namespace App\Http\Controllers;

use App\Services\Transaction\TransactionService;
use App\Services\User\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
        $data = [
            "title" => "Home",
        ];
        if (Auth::check()) {
            if(isset($request->td)) {
                $transactions = $this->transactionService->userTransactionByDay($request->td, auth()->user()->id);
            } else {
                $transactions = $this->transactionService->getByUserId(auth()->user()->id);
            }
            $data['transactions'] = $transactions;
        }
        return view("home.index", $data);
    }
}
