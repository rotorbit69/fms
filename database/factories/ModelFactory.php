<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'default_roster_start_time' => "080000",
        'default_roster_finish_time' => "190000",
        'active_appendix' => "A5",
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Shift::class, function (Faker\Generator $faker) {
   
    return [
        
        'user_id' => $faker->randomElement($array = array ('1')),
        //'date' => Carbon\Carbon::now() ,
        'date' => "", /** property set in ShiftsTableSeeder */
        'appendice_id' => "5",
        'locked_flag' => false,
        'day_off_flag' => false,
        'duty_finish_time' => "",/** property set in ShiftsTableSeeder */
        'duty_start_time' => "",/** property set in ShiftsTableSeeder */
        'type' => "",/** property set in ShiftsTableSeeder */

        'duty_duration' => $faker->randomElement($array = array ('420','480','540','600')),
       
        'duty_maximum' => $faker->randomElement($array = array ('540','600')),

        'odp_duration' => $faker->randomElement($array = array ('540','600')),
        'odp_start_time' => "0" . $faker->randomElement($array = array ('19','20','21')) . $faker->randomElement($array = array ('00','30')) . "00",
        'odp_finish_time' => "0" . $faker->randomElement($array = array ('6','7','8')) . $faker->randomElement($array = array ('00','30')) . "00",
        'odp_normal_sleep_period_flag' => false,

        'flight_time_total' => $faker->numberBetween(0,6) . "." . $faker->numberBetween(0,9),
        'flight_time_max' => $faker->numberBetween(1,8),
        'flight_time_remaining' => $faker->numberBetween(1,10). "." . $faker->numberBetween(0,9),
        'flight_time_168_hours' => $faker->numberBetween(10,50). "." . $faker->numberBetween(0,9),
        'flight_time_7_days' => $faker->numberBetween(10,30). "." . $faker->numberBetween(0,9),
        'flight_time_28_days' => $faker->numberBetween(100,150). "." . $faker->numberBetween(0,9),
        'flight_time_90_days' => $faker->numberBetween(300,400). "." . $faker->numberBetween(0,9),
        'flight_time_365_days' => $faker->numberBetween(1200,1400). "." . $faker->numberBetween(0,9),



    ];
});

$factory->define(App\Flight::class, function (Faker\Generator $faker) {
    return [
    	'registration' => $faker->word, /* this is changed in the flight.php to VH-HLK*/
        'date_time' => $faker->unique()->dateTimeBetween($startDate = "-1 year", $endDate = "now")->format('Y-m-d'),
        'departure' => $faker->word,
        'destination' => $faker->word,
        'flight_time' => $faker->numberBetween(3,5) . "." . $faker->numberBetween(0,9),
        'engine_time' => $faker->numberBetween(1,5) . "." . $faker->numberBetween(0,9),
        'user_id' => $faker->numberBetween(1,2)
       
    ];
});

$factory->define(App\Appendice::class, function (Faker\Generator $faker) {
    return [
                /* empty records required - no values set here - all values set in AppendicesTableSeeder.php */
    ];
});
