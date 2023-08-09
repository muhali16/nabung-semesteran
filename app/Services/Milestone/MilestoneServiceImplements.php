<?php

namespace App\Services\Milestone;

use App\Repositories\Milestone\MilestoneRepository;
use App\Services\Service;

class MilestoneServiceImplements extends Service implements MilestoneService
{
    public $mainRepository;

    public function __construct(MilestoneRepository $mainRepository)
    {
        $this->mainRepository = $mainRepository;
    }

    public function getTotalBalanceAllUsers()
    {
        return $this->mainRepository->getTotalBalanceAllUsers();
    }

    public function getTotalValidUsers()
    {
        return $this->mainRepository->getTotalValidUser();
    }

    public function getTargetTotalBalance($targetUserBalance, $totalValidUsers)
    {
        return $targetUserBalance * $totalValidUsers;
    }

    public function getTotalPercentageBalance($totalBalance, $targetTotalBalance)
    {
        return floor(($totalBalance / $targetTotalBalance) * 100);
    }

    public function getUserPercentageBalance($userBalance, $targetBalance)
    {
        return floor(($userBalance / $targetBalance) * 100);
    }
}
