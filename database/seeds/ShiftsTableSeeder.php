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

      $numberOfRows = 14;

      factory('App\Shift',$numberOfRows)->create([
        /** can set default values here : 'Duration'=>'600' **/
        ]);
      
        for ($x = 1; $x <= $numberOfRows; $x++) {    
            $shift = App\Shift::find($x);
            $shift->date  =  Carbon\Carbon::now()->addDays($x); /** set sequential days from now */
            $shift->duty_start_time = $shift->date;
            $shift->duty_finish_time = $shift->date->addHours(8);
            $shift->save();
        }
    }
}