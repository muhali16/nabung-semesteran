<?php

namespace App\Repositories\User;


use App\Repositories\Repository;

interface UserRepository extends Repository {
    public function getUserByUsername($username);
}
