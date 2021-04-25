<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Dctame',
            'email' => 'Dctame@example.com',
            'password' => Hash::make('12345'),
        ]);

        DB::table('users')->insert([
            'name' => 'grin',
            'email' => 'grin@grin.com',
            'password' => Hash::make('grin'),
        ]);

        DB::table('users')->insert([
            'name' => 'MariVHalupe',
            'email' => 'halupa@gmail.com',
            'password' => Hash::make('halupassword'),
        ]);
    }
}
