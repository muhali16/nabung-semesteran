<?php

namespace App\Http\Controllers;

use App\Services\Milestone\MilestoneService;
use App\Services\Wallet\WalletService;
use Illuminate\Support\Facades\Auth;

class MilestoneController extends Controller
{
    public $milestoneService;
    public $walletService;
    public function __construct(MilestoneService $milestoneService, WalletService $walletService)
    {
        $this->milestoneService = $milestoneService;
        $this->walletService = $walletService;
    }

    public function index()
    {
        $targetUserBalance = 500000;

        $totalValidUsers = $this->milestoneService->getTotalValidUsers();
        $totalBalance = $this->milestoneService->getTotalBalanceAllUsers();
        $targetTotalBalance = $this->milestoneService->getTargetTotalBalance($targetUserBalance, $totalValidUsers);
        $percentageTotalBalance = $this->milestoneService->getTotalPercentageBalance($totalBalance, $targetTotalBalance);
        $data = [

            "title" => "Milestone",
            "totalBalance" => $totalBalance,
            "totalValidUsers" => $totalValidUsers,
            "targetBalance" => $targetTotalBalance,
            "targetUserBalance" => $targetUserBalance,
            "percentageTotalBalance" => $percentageTotalBalance,
        ];
        if (Auth::check()) {
            $userBalance = ($this->walletService->getByUserId(auth()->user()->id))->balance;
            $percentageUserBalance = $this->milestoneService->getUserPercentageBalance($userBalance, $targetUserBalance);
            $data['userBalance' ] = $userBalance;
            $data['percentageUserBalance'] = $percentageUserBalance;
        }

        return view("milestone.index", $data);
    }
}
