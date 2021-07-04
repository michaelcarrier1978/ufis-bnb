<?php

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
         $this->call(TypeSeeder::class);
         $this->call(PropertySeeder::class);
         $this->call(ReviewSeeder::class);
    }
}
