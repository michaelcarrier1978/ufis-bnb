<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('property')->insert([
                ['title' => 'Heart of Salt Lake City', 'type' => 'house', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
                ['title' => 'Glamorous Draper Mansion w/ Pool', 'type' => 'house', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
                ['title' => 'Historic Downtown Apartment', 'type' => 'apartment', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
                ['title' => 'Charming Salt Lake Valley Bed & Breakfast', 'type' => 'apertment', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
                ['title' => 'Secluded Cabin in Midway, UT', 'type' => 'cabin', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]
            ]
        );
    }
}
