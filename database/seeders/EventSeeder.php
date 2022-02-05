<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Group;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $RIZIN = $this->getInitialEvent(1, 'RIZINテスト大会', new Carbon('2022-2-22'));
        $K_1 = $this->getInitialEvent(2, 'K-1テスト大会', new Carbon('2022-2-23'));
        $UFC = $this->getInitialEvent(5, 'UFCテスト大会', new Carbon('2022-2-24'));
        DB::table('events')->insert([$RIZIN, $K_1, $UFC]);
    }

    /**
     * テストデータで使用するイベント情報を登録する
     * 
     * @param string $groupId 団体ID
     * @param string $eventName イベント名
     * @param string $date 開催日の日付
     * 
     * @return array 登録するデータ
     */
    private function getInitialEvent($groupId, $eventName, $date)
    {
        $event = [
            'name' => $eventName,
            'group_id' => $groupId,
            'date' => $date,
            'created_at' => Carbon::now()
        ];
        return $event;
    }
    
}
