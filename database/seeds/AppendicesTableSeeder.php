<?php

use Illuminate\Database\Seeder;
use App\Appendice;

class AppendicesTableSeeder extends Seeder
{
    public function run()
    {
        Eloquent::unguard();

        
        $Appendices =
        [
           // need the id=1:A1, 2:A2 etc //
            [
            'code' => 'A1'
            ],

            [
            'code' => 'A2'
            ],

            [
            'code' => 'A3'
            ],
            

            [
            'code' => 'A4',
            'title' => 'Charter',
            'normal_sleep_period_start_time' => '220000',
            'normal_sleep_period_finish_time' => '050000'
            ],

            [
            'code' => 'A5',
            'title' => 'Airwork',
            'normal_sleep_period_start_time' => '230000',
            'normal_sleep_period_finish_time' => '052900'
            ],

            [
            'code' => 'A6',
            'title' => 'Training',
            'normal_sleep_period_start_time' => '220000',
            'normal_sleep_period_finish_time' => '050000'
            ],
        ];

        foreach ($Appendices as $appendice) {
            $record = Appendice::whereCode($appendice['code'])->first();
            if ($record) {
                $record->title = $appendice['title'];
                $record->normal_sleep_period_start_time = $appendice['normal_sleep_period_start_time'];
                $record->normal_sleep_period_finish_time = $appendice['normal_sleep_period_finish_time'];
                
                $record->save();
            } else {
                Appendice::create($appendice);
            }
        }
    }
}
