<?php

use Illuminate\Database\Seeder;

class inventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventories')->insert([
            'user_id' => 1,
            'items_id' => 1,

        ]);
    }
}
