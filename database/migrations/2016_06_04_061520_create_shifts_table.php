<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shifts', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->boolean('locked_flag')->default(0);
            $table->boolean('day_off_flag')->default(0);

            $table->datetime('duty_start_time');
            $table->integer('duty_duration')->unsigned();
            $table->datetime('duty_finish_time');
            $table->integer('duty_maximum')->unsigned();

            $table->integer('odp_duration')->unsigned();
            $table->time('odp_start_time');
            $table->time('odp_finish_time');
            $table->boolean('odp_normal_sleep_period_flag')->default(0);

            $table->decimal('flight_time_total' ,4 ,1);
            $table->decimal('flight_time_max' ,4 ,1)->unsigned();
            $table->decimal('flight_time_remaining' ,4 ,1)->unsigned();
            $table->decimal('flight_time_168_hours' ,4 ,1)->unsigned();
            $table->decimal('flight_time_28_days' ,4 ,1)->unsigned();
            $table->decimal('flight_time_90_days' ,5 ,1)->unsigned();
            $table->decimal('flight_time_365_days' ,6 ,1)->unsigned();          
             $table->timestamps();
            /** Foreign Keys **/
            $table->integer('user_id')->unsigned();
            $table->integer('appendice_id')->unsigned();
           /** $table->foreign('user_id')->references('id')->on('users');**/
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shifts');
    }
}
