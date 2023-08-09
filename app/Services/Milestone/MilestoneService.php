<?php

namespace App\Services\Milestone;

use App\Services\BaseService;

interface MilestoneService extends BaseService
{
    public function getTotalBalanceAllUsers();

    public function getTotalValidUsers();

    public function getTargetTotalBalance($targetUserBalance, $totalValidUsers);
    public function getTotalPercentageBalance($totalBalance, $targetTotalBalance);
    public function getUserPercentageBalance($userBalance, $targetBalance);
}
