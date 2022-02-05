<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ConclusionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conclusions')->insert($this->getConclusions());
    }
    private function getConclusions()
    {
        return
            [
                ['name' => '判定', 'created_at' => Carbon::now()],
                ['name' => 'KO（TKO）', 'created_at' => Carbon::now()],
                ['name' => '一本', 'created_at' => Carbon::now()],
                ['name' => '無効試合', 'created_at' => Carbon::now()],
            ];
    }

}
