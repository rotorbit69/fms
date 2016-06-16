<?php

use Illuminate\Database\Seeder;

class AppendicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
    */

    public function run()
    {

 DB::table('appendices')->truncate();/** this truncates again incase you run it individually - not via the dataseeder */

      factory('App\Appendice',10)->create([
        /** can set default values here : 'Duration'=>'600' **/
        ]);


     $appendice = App\Appendice::find(5);
        $appendice->code = 'A5';
        $appendice->title = 'Airwork';
        $appendice->normal_sleep_period_start_time = '230000';
        $appendice->normal_sleep_period_finish_time = '052900';
    $appendice->save();

    $appendice = App\Appendice::find(6);
        $appendice->code = 'A6';
        $appendice->title = 'Training';
        $appendice->normal_sleep_period_start_time = '220000';
        $appendice->normal_sleep_period_finish_time = '050000';
    $appendice->save();

    }
}
