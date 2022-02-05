<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PredictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fightData = [[1, 1, 1, 1], [1, 2, 2, 4]];
        foreach ($fightData as $fight) {
            DB::table('predicts')->insert($this->getInitialPredict($fight[0], $fight[1], $fight[2], $fight[3]));
        }
    }

    /**
     * テストデータで使用する対戦カードを登録する
     * 
     * @param int $userId ユーザID
     * @param int $fightId 対戦カードID
     * @param int $conclusionId 決着判定ID
     * @param int $winFighterId 勝利予想選手ID
     * 
     * @return array 登録するデータ
     */
    private function getInitialPredict($userId, $fightId, $conclusionId, $winFighterId)
    {
        $fight = [
            'user_id' => $userId,
            'fight_id' => $fightId,
            'conclusion_id' => $conclusionId,
            'win_fighter_id' => $winFighterId,
            'created_at' => Carbon::now()
        ];
        return $fight;
    }
}
