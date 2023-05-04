<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    return redirect(route("dashboard"));
});

Route::prefix("/dashboard")->middleware("auth")->group(function () {
    Route::get('/', [\App\Http\Controllers\DashboardController::class, "index"])->name("dashboard");
    Route::get('/administrator', [\App\Http\Controllers\DashboardController::class, "admin"])->name("dashboard.administrator");
    Route::get("/users", [\App\Http\Controllers\DashboardController::class, "users"])->name("dashboard.users");
    Route::get("/reset-password/{username}", [\App\Http\Controllers\UsersController::class, "resetPassword"])->name("dashboard.reset-password");
    Route::get("/reset-username/{username}", [\App\Http\Controllers\UsersController::class, "resetUsername"])->name("dashboard.reset-username");
    Route::get("/delete/{username}", [\App\Http\Controllers\UsersController::class, "destroy"])->name("dashboard.delete");
    Route::get("/users/create", [\App\Http\Controllers\UsersController::class, "create"])->name("dashboard.users.create");
    Route::get("/profile", [\App\Http\Controllers\UsersController::class, "index"])->name("dashboard.profile");
    Route::get("/milestone", [\App\Http\Controllers\MilestoneController::class, "index"])->name("dashboard.milestone");

    Route::post("/transaction/store", [\App\Http\Controllers\TransactionController::class, "store"])->name("transaction.store");
    Route::post("/users/create", [\App\Http\Controllers\UsersController::class, "store"])->name("users.store");
    Route::post("/change-role", [\App\Http\Controllers\UsersController::class, "changeRole"])->name("dashboard.user.change.role");
    Route::post("/profile", [\App\Http\Controllers\UsersController::class, "update"])->name("dashboard.profile.edit");
    Route::post("/change-password", [\App\Http\Controllers\UsersController::class, "changePassword"])->name("dashboard.users.changepassword");
});

Route::controller(\App\Http\Controllers\LoginController::class)->group(function (){
    Route::get("/login", "index")->middleware("guest")->name("login");
    Route::post("/auth", "authentication")->middleware("guest")->name("auth");
    Route::get("/logout", "logout")->middleware("auth")->name("logout");
});
