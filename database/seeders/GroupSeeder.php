<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert($this->getInitialGroupNames());
    }

    private function getInitialGroupNames()
    {
        return
            [
                ['name' => 'RIZIN', 'created_at' => Carbon::now()],
                ['name' => 'K-1', 'created_at' => Carbon::now()],
                ['name' => 'DEEP', 'created_at' => Carbon::now()],
                ['name' => 'ONE', 'created_at' => Carbon::now()],
                ['name' => 'UFC', 'created_at' => Carbon::now()],
            ];
    }
}
