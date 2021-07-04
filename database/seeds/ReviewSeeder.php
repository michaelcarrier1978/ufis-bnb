<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('review')->insert([
            ['property_id' => 1, 'rating' => 4, 'comment' => 'Awesome house!', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],  
            ['property_id' => 1, 'rating' => 5, 'comment' => 'Great location!', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],  
            ['property_id' => 2, 'rating' => 3, 'comment' => 'Love the pool!', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],  
            ['property_id' => 2, 'rating' => 5, 'comment' => 'Amazing property!', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],  
            ['property_id' => 3, 'rating' => 5, 'comment' => 'Location was great', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],  
            ['property_id' => 4, 'rating' => 3, 'comment' => 'Great food', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],  
            ['property_id' => 5, 'rating' => 5, 'comment' => 'Nice and cozy', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]
        ]);
    }
}
