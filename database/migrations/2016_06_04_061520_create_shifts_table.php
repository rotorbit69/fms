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
            $table->timestamps();
            $table->time('StartTime');
            $table->integer('Duration')->unsigned();
            /** Foreign Keys **/
            $table->integer('user_id')->unsigned();
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
