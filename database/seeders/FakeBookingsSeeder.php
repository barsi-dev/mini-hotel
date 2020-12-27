<?php

namespace Database\Seeders;

use App\Models\Bookings;
use Illuminate\Database\Seeder;

class FakeBookingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bookings::factory()->times(15)->create();
    }
}