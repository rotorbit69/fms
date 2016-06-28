<?php

use Illuminate\Database\Seeder;
use App\Models\Appendice;

class AppendicesTableSeeder extends Seeder
{
    public function run()
    {
        Eloquent::unguard();

        
        $Appendices = [
           	['code' => 'A4', 'title' => 'Charter', 'normal_sleep_period_start_time' => '220000', 'normal_sleep_period_finish_time' => '050000'],
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
