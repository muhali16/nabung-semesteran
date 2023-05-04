<?php

namespace App\Services\Milestone;

interface MilestoneService
{
    public function getTotalBalanceAllUsers();

    public function getTotalValidUsers();

    public function getTargetTotalBalance($targetUserBalance, $totalValidUsers);
    public function getTotalPercentageBalance($totalBalance, $targetTotalBalance);
    public function getUserPercentageBalance($userBalance, $targetBalance);
}
