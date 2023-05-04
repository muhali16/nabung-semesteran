<?php

namespace App\Services\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Repositories\User\UserRepository;

class UserServiceImplement extends \App\Services\Service implements UserService{

     /**
     * don't change $this->mainRepository variable name
     * because used in extends service class
     */
     protected $mainRepository;

    public function __construct(UserRepository $mainRepository)
    {
      $this->mainRepository = $mainRepository;
    }

    public function resetPassword($username)
    {
        $user = $this->mainRepository->getUserByUsername($username);
        $update = $user->update([
            "password" => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
        ]);

        if (!$update) {
            return false;
        }

        return true;
    }

    public function changeUsername($username)
    {
        $user = $this->mainRepository->getUserByUsername($username);
        $update = $user->update([
            "username" => Str::random(8),
        ]);

        if (!$update) {
            return false;
        }

        return true;
    }

    public function deleteByUsername($username)
    {
        $user = $this->mainRepository->getUserByUsername($username);
        $delete = $user->delete();
        if (!$delete) {
            return false;
        }

        return true;
    }

    public function getUserByUsername($username)
    {
        return $this->mainRepository->getUserByUsername($username);
    }

    public function changePassword($id, $oldPassword, $newPassword)
    {
        $user = $this->mainRepository->find($id);
        $checkPassword = Hash::check($oldPassword, $user->password);
        if(!$checkPassword) {
            return false;
        }

        $user->update([
            "password" => Hash::make($newPassword),
        ]);

        return true;
    }
}
