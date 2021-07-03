<?php

namespace Database\Seeders;
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
       $this->call(HotelSeeder::class);
      // \App\Models\Hotel::factory(12)->create();
       \App\Models\Room::factory(5)->create();
       //\App\Models\Reservation::factory(9)->create();
      //$this->call(ReservationSeeder::class);
    }
}
