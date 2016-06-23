<?php

use Illuminate\Database\Seeder;

class FlightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
    */

    public function run()
    {

        DB::table('flights')->truncate();/** this truncates again incase you run it individually - not via the dataseeder */

      factory('App\Flight',400)->create([
        /** can set default values here : 'Duration'=>'600' **/
        ]);


    }
}
