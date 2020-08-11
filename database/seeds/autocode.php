<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class autocode extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('autocodes')->insert([
            'autocodekey' => 'productcode',
            'prefix' => 'WICON',
            'inc' => 1,
            'suffix' => 1,
        ]);
    }
}
