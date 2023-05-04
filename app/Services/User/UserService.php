<?php

namespace App\Services\User;

interface UserService extends \App\Services\BaseService {

    public function resetPassword($username);
    public function changeUsername($username);
    public function deleteByUsername($username);
    public function getUserByUsername($username);

    public function changePassword($id, $oldPassword, $newPassword);
}
