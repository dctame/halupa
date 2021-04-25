<?php

use Illuminate\Database\Seeder;

class ItemsPositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items_locations')->insert([
            'location_id' => '3',
            'items_id' => '1',
        ]);
    }
}
