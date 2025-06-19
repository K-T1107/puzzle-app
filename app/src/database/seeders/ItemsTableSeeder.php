<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::create([
            'name' => 'ちからのこな',
            'kinds' => '回復アイテム',
            'effect' => '50',
            'explanation' => '体力を回復'
        ]);
        Item::create([
            'name' => 'エフェクトガード',
            'kinds' => '戦闘用アイテム',
            'effect' => '-',
            'explanation' => '相手からの能力変かをうけない'
        ]);
        Item::create([
            'name' => 'ポケじゃらし',
            'kinds' => '戦闘用アイテム',
            'effect' => '-',
            'explanation' => '必ず逃げられる'
        ]);
        Item::create([
            'name' => 'ばんのうがさ',
            'kinds' => 'もちもの',
            'effect' => '-',
            'explanation' => '天候の効果を無効化する'
        ]);
    }
}
