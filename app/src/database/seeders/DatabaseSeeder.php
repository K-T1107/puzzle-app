<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //$this->call(AccountsTableSeeder::class);
        //$this->call(ItemsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        //$this->call(UserItemTableSeeder::class);
    }
}
