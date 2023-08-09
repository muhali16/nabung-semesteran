<?php

namespace App\Repositories\Milestone;

use App\Models\User;
use App\Models\Wallet;
use App\Repositories\Eloquent;

class MilestoneRepositoryImplement extends Eloquent implements MilestoneRepository
{
    public $model;
    public $users;

    public function __construct(Wallet $model, User $users)
    {
        $this->model = $model;
        $this->users = $users;
    }

    public function getTotalBalanceAllUsers()
    {
        $data = $this->model->all();
        $totalBalance = 0;
        foreach ($data as $user) {
            $totalBalance += $user->balance;
        }

        return $totalBalance;
    }

    public function getTotalValidUser()
    {
        $users = $this->users->all();
        $count = 0;

        foreach ($users as $user) {
            if ($user->wallet->balance > 0) {
                $count++;
            }
        }

        return $count;
    }
}
