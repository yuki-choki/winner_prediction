<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Event;
use App\Models\Fighter;

class FightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fights')->insert($this->getInitialFight(1, 1, 3, 1));
        DB::table('fights')->insert($this->getInitialFight(1, 2, 4, 2));
    }

    /**
     * テストデータで使用する対戦カードを登録する
     * 
     * @param int $eventId イベントのID
     * @param int $redFighterId 赤コーナーの選手ID
     * @param int $blueFighterId 青コーナーの選手ID
     * @param int $order 試合順
     * 
     * @return array 登録するデータ
     */
    private function getInitialFight($eventId, $redFighterId, $blueFighterId, $order)
    {
        $fight = [
            'event_id' => $eventId,
            'red_fighter_id' => $redFighterId,
            'blue_fighter_id' => $blueFighterId,
            'match_order' => $order,
            'created_at' => Carbon::now()
        ];
        return $fight;
    }
}
