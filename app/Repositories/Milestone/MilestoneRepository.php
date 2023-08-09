<?php

namespace App\Repositories\Milestone;

use App\Repositories\Repository;

interface MilestoneRepository extends Repository
{
    public function getTotalBalanceAllUsers();

    public function getTotalValidUser();
}
