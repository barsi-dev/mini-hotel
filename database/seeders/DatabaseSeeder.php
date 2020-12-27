<?php

namespace Database\Seeders;

use App\Models\Bookings;
use App\Models\GlobalVars;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Bookings::factory()->times(15)->create();
        GlobalVars::factory()->times('1')->create();
    }
}