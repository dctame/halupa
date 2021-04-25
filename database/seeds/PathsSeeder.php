<?php

use Illuminate\Database\Seeder;

class PathsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paths')->insert([
            'locations_id' => '1',
            'path' => '2',
        ]);
        DB::table('paths')->insert([
            'locations_id' => '1',
            'path' => '4',
        ]);
        DB::table('paths')->insert([
            'locations_id' => '2',
            'path' => '3',
        ]);
        DB::table('paths')->insert([
            'locations_id' => '2',
            'path' => '1',
        ]);
        DB::table('paths')->insert([
            'locations_id' => '3',
            'path' => '2',
        ]);
        DB::table('paths')->insert([
            'locations_id' => '3',
            'path' => '4',
        ]);
        DB::table('paths')->insert([
            'locations_id' => '4',
            'path' => '3',
        ]);
        DB::table('paths')->insert([
            'locations_id' => '4',
            'path' => '1',
        ]);
        DB::table('paths')->insert([
            'locations_id' => '1',
            'path' => '5',
        ]);
        DB::table('paths')->insert([
            'locations_id' => '5',
            'path' => '1',
        ]);

        DB::table('paths')->insert([
            'locations_id' => '5',
            'path' => '6',
        ]);

        DB::table('paths')->insert([
            'locations_id' => '6',
            'path' => '7',
        ]);

        DB::table('paths')->insert([
            'locations_id' => '7',
            'path' => '6',
        ]);
        DB::table('paths')->insert([
            'locations_id' => '7',
            'path' => '8',
        ]);

        DB::table('paths')->insert([
            'locations_id' => '7',
            'path' => '14',
        ]);

        DB::table('paths')->insert([
            'locations_id' => '7',
            'path' => '16',
        ]);

        DB::table('paths')->insert([
            'locations_id' => '7',
            'path' => '17',
        ]);

        DB::table('paths')->insert([
            'locations_id' => '8',
            'path' => '9',
        ]);

        DB::table('paths')->insert([
            'locations_id' => '9',
            'path' => '10',
        ]);

        DB::table('paths')->insert([
            'locations_id' => '10',
            'path' => '9',
        ]);

        DB::table('paths')->insert([
            'locations_id' => '10',
            'path' => '11',
        ]);

        DB::table('paths')->insert([
            'locations_id' => '10',
            'path' => '13',
        ]);

        DB::table('paths')->insert([
            'locations_id' => '11',
            'path' => '10',
        ]);

        DB::table('paths')->insert([
            'locations_id' => '11',
            'path' => '12',
        ]);

        DB::table('paths')->insert([
            'locations_id' => '12',
            'path' => '11',
        ]);

        DB::table('paths')->insert([
            'locations_id' => '13',
            'path' => '10',
        ]);

        DB::table('paths')->insert([
            'locations_id' => '13',
            'path' => '5',
        ]);

        DB::table('paths')->insert([
            'locations_id' => '17',
            'path' => '7',
        ]);
        DB::table('paths')->insert([
            'locations_id' => '17',
            'path' => '16',
        ]);
        DB::table('paths')->insert([
            'locations_id' => '17',
            'path' => '15',
        ]);

        DB::table('paths')->insert([
            'locations_id' => '15',
            'path' => '14',
        ]);

        DB::table('paths')->insert([
            'locations_id' => '16',
            'path' => '14',
        ]);

        DB::table('paths')->insert([
            'locations_id' => '16',
            'path' => '7',
        ]);

        DB::table('paths')->insert([
            'locations_id' => '16',
            'path' => '18',
        ]);

        DB::table('paths')->insert([
            'locations_id' => '17',
            'path' => '7',
        ]);

        DB::table('paths')->insert([
            'locations_id' => '17',
            'path' => '18',
        ]);
        DB::table('paths')->insert([
            'locations_id' => '17',
            'path' => '19',
        ]);

        DB::table('paths')->insert([
            'locations_id' => '19',
            'path' => '20',
        ]);

        DB::table('paths')->insert([
            'locations_id' => '20',
            'path' => '19',
        ]);
    }
}
