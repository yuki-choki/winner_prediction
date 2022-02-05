<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FighterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fighters')->insert($this->getInitialFighters());
    }

    private function getInitialFighters()
    {
        return [
            [
                'name' => '朝倉海',
                'total' => 21,
                'win' => 17,
                'ko_win' => 13,
                'sub_win' => 0,
                'dec_win' => 4,
                'other_win' => 0,
                'lose' => 4,
                'ko_lose' => 3,
                'sub_lose' => 0,
                'dec_lose' => 1,
                'other_lose' => 0,
                'draw' => 0,
                'no_contest' => 0,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => '朝倉未来',
                'total' => 18,
                'win' => 15,
                'ko_win' => 9,
                'sub_win' => 0,
                'dec_win' => 6,
                'other_win' => 0,
                'lose' => 3,
                'ko_lose' => 0,
                'sub_lose' => 1,
                'dec_lose' => 2,
                'other_lose' => 0,
                'draw' => 0,
                'no_contest' => 0,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => '井上直樹',
                'total' => 17,
                'win' => 14,
                'ko_win' => 1,
                'sub_win' => 8,
                'dec_win' => 5,
                'other_win' => 0,
                'lose' => 3,
                'ko_lose' => 0,
                'sub_lose' => 0,
                'dec_lose' => 3,
                'other_lose' => 0,
                'draw' => 0,
                'no_contest' => 0,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => '萩原恭平',
                'total' => 10,
                'win' => 6,
                'ko_win' => 5,
                'sub_win' => 0,
                'dec_win' => 1,
                'other_win' => 0,
                'lose' => 4,
                'ko_lose' => 0,
                'sub_lose' => 0,
                'dec_lose' => 4,
                'other_lose' => 0,
                'draw' => 0,
                'no_contest' => 0,
                'created_at' => Carbon::now(),
            ],
        ];
    }
}
