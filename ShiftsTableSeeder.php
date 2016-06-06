<?php

use Illuminate\Database\Seeder;

class ShiftsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
     
      factory('App\Shift',15)->create([
        /** can set default values here : 'Duration'=>'600' **/
        ]);


    }
}
