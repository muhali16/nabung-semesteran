<?php

namespace Database\Seeders;

use App\Models\Level;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            "name" => "Muhammad Ali Mustaqim",
            "level_id" => 1,
            "username" => "muhali16",
            "password" => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi"
        ]);

        Level::create([
            "name" => "Admin",
        ]);
        Level::create([
            "name" => "User",
        ]);

        Wallet::create([
            'user_id' => 1,
            "balance" => 0,
        ]);
    }
}
