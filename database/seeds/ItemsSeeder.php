<?php

use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'name' => 'Ключи',
            'description' => 'Маленький милый ключик от шкафа',
            'type' => 'stuff',
            'img' => asset('public/storage/img/inventory/8.jpg'),
        ]);
    }
}
