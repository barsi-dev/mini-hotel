<?php

namespace Database\Seeders;

use App\Models\GlobalVars;
use Illuminate\Database\Seeder;

class GlobalVarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GlobalVars::factory()->times('1')->create();
    }
}