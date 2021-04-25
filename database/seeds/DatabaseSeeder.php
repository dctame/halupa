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
         $this->call(LocationSeeder::class);
         $this->call(ItemsSeeder::class);
         $this->call(PathsSeeder::class);
         $this->call(UserSeeder::class);
         $this->call(ItemsPositionSeeder::class);
        // $this->call(inventorySeeder::class);

    }
}
