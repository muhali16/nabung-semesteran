<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdatePasswordUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Services\User\UserService;
use App\Services\Wallet\WalletService;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    private $userService;
    private $walletService;

    public function __construct(UserService $userService, WalletService $walletService)
    {
        $this->userService = $userService;
        $this->walletService = $walletService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("dashboard.profile.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.users.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();
        $store = $this->userService->create([
            "name" => $data['name'],
            "username" => $data['username'],
            "password" => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
            "level_id" => $data['level_id'],
        ]);
        $user = $this->userService->getUserByUsername($data['username']);
        $wallet = $this->walletService->create([
            "balance" => 0,
            "user_id" => $user->id,
        ]);

        return redirect(route("dashboard.users"))->with("success-createuser", "User berhasil dibuat.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($username)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request)
    {
        $data = $request->validated();
        $update = $this->userService->update(auth()->user()->id, [
            "username" => $data['username'],
            "name" => $data['name'],
        ]);

        return back()->with("success-update", "Berhasil update profile");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($username)
    {
        $this->authorize("is_admin");
        $delete = $this->userService->deleteByUsername($username);
        if (!$delete) {
            return back()->with("failed-delete", "User gagal dihapus.");
        }
        return back()->with("success-delete", "User berhasil dihapus.");
    }

    public function resetPassword($username)
    {
        $this->authorize("is_admin");
        $reset = $this->userService->resetPassword($username);
        if (!$reset) {
            return back()->with("failed-resetpass", "Password gagal direset.");
        }
        return back()->with("success-resetpass", "Password sudah direset.");
    }

    public function resetUsername($username)
    {
        $this->authorize("is_admin");

        $reset = $this->userService->changeUsername($username);
        if (!$reset) {
            return back()->with("failed-resetuser", "Username gagal direset.");
        }
        return back()->with("success-resetuser", "Username sudah direset.");
    }

    public function changeRole(Request $request)
    {
        $this->authorize("is_admin");
        $update = $this->userService->update($request->user_id, [
            "level_id" => $request->level_id
        ]);

        return back()->with("success-changerole", "Role berhasil diubah.");
    }

    public function changePassword(UpdatePasswordUserRequest $request)
    {
        $data = $request->validated();
        $changePassword = $this->userService->changePassword(auth()->user()->id, $data['old_password'], $data['new_password']);

        if(!$changePassword) {
            return back()->with("failed-changepassword", "Gagal mengganti password.");
        }

        return back()->with("success-changepassword", "Berhasil mengganti password.");
    }
}
