<?php

use Illuminate\Database\Seeder;

class ShiftsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
    */

    public function run()
    {

        DB::table('shifts')->truncate();/** this truncates again incase you run it individually - not via the dataseeder */

      factory('App\Shift',300)->create([
        /** can set default values here : 'Duration'=>'600' **/
        ]);


    }
}