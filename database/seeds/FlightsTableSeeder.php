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

      $no_of_rows = 400;

      factory('App\Flight',$no_of_rows)->create([
        /** can set default values here : 'Duration'=>'600' **/
        ]);

      
         /** overwrite the dates created in the Flights table to be reverse sequential**/
           $nd = Carbon\Carbon::now();
            for ($x = 1; $x <= $no_of_rows; $x++) {    
                $flight = App\Flight::find($x);
                $nd =  $nd->subDays(1);
                echo ".";
                $flight->date_time = $nd;
                $flight->save();
            }

    }
}
