<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(100)->create();
//        User::create([
//            'name' => 'カブトプス',
//            'level' => '40',
//            'Exp' => '1000000',
//        ]);
//        User::create([
//            'name' => 'ハピナス',
//            'level' => '35',
//            'Exp' => '800000',
//        ]);
    }
}
