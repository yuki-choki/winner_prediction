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
        $RIZIN = $this->getInitialEvent(
            1,
            'RIZINテスト大会',
            new Carbon('2022-2-22'),
            'https://d1uzk9o9cg136f.cloudfront.net/f/16782696/rc/2021/12/27/51a65302c1b92e971c0e45c1598a8d3550eafec7_xlarge.jpg',
            'https://jp.rizinff.com/',
        );
        $K_1 = $this->getInitialEvent(
            2,
            'K-1テスト大会',
            new Carbon('2022-2-23'),
            'https://k-1.shop/upload/save_image/01242025_61ee8cb15f16e.jpg',
            'https://www.k-1.co.jp/',
        );
        $UFC = $this->getInitialEvent(
            5,
            'UFCテスト大会',
            new Carbon('2022-2-24'),
            'https://ufcjapan.s3.ap-northeast-1.amazonaws.com/wp-content/uploads/2020/04/08163658/GettyImages-102503125-728x485.jpg',
            'https://jp.ufc.com/',
        );
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
    private function getInitialEvent($groupId, $eventName, $date, $url, $fromUrl)
    {
        $event = [
            'name' => $eventName,
            'group_id' => $groupId,
            'date' => $date,
            'image' => $url,
            'from_url' => $fromUrl,
            'created_at' => Carbon::now()
        ];
        return $event;
    }
    
}
