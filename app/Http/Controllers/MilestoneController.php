<?php

namespace App\Http\Controllers;

use App\Services\Milestone\MilestoneService;
use App\Services\Wallet\WalletService;

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
        $totalBalance = $this->milestoneService->getTotalBalanceAllUsers();
        $totalValidUsers = $this->milestoneService->getTotalValidUsers();
        $userBalance = ($this->walletService->getByUserId(auth()->user()->id))->balance;
        $targetUserBalance = 500000;
        $targetTotalBalance = $this->milestoneService->getTargetTotalBalance($targetUserBalance, $totalValidUsers);
        $percentageTotalBalance = $this->milestoneService->getTotalPercentageBalance($totalBalance, $targetTotalBalance);
        $percentageUserBalance = $this->milestoneService->getUserPercentageBalance($userBalance, $targetUserBalance);
        return view("dashboard.milestone.index", [
            "totalBalance" => $totalBalance,
            "totalValidUsers" => $totalValidUsers,
            "targetBalance" => $targetTotalBalance,
            "targetUserBalance" => $targetUserBalance,
            "percentageTotalBalance" => $percentageTotalBalance,
            "userBalance" => $userBalance,
            "percentageUserBalance" => $percentageUserBalance,
        ]);
    }
}
