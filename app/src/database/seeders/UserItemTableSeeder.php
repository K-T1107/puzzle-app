<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserItem::create([
            'user_id' => '1',
            'item_id' => '1',
            'amount' => '3',
        ]);
        UserItem::create([
            'user_id' => '3',
            'item_id' => '4',
            'amount' => '1',
        ]);
        UserItem::create([
            'user_id' => '2',
            'item_id' => '2',
            'amount' => '3',
        ]);
    }
}
