<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Shift extends Model
{

    // Valid constant names

    // These constants relate to Appendix A5 Airwork Only
   const MAX_FLIGHT_TIME_7_DAYS    =   50;// not this needs to change 168 hours is not 7 days !
   const MAX_FLIGHT_TIME_28_DAYS    =   170;
   const MAX_FLIGHT_TIME_90_DAYS    =   450;
   const MAX_FLIGHT_TIME_365_DAYS   =   1200;
   const MAX_FLIGHT_TIME_168_HRS    =   50;


    //
     // MASS ASSIGNMENT -------------------------------------------------------
    // define which attributes are mass assignable (for security)
    // we only want these 3 attributes able to be filled
    protected $fillable = [
            'locked_flag', 
            'day_off_flag', 
            'type', 
            'duty_start_time', 
            'duty_duration', 
            'duty_finish_time', 
            'duty_maximum', 
            'odp_duration', 
            'odp_start_time', 
            'odp_finish_time', 
            'odp_normal_sleep_period_flag',
            'flight_time_total',
            'flight_time_max',  
            'flight_time_remaining',  
            'flight_time_7_days',  
            'flight_time_28_days',  
            'flight_time_90_days' ,
            'flight_time_168_hours',  
            'flight_time_365_days'
            ];


    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function appendice(){
    	return $this->belongsTo('App\Appendice');
    }
    
    protected $dates = ['date', 'duty_start_time', 'duty_finish_time'];

   public function getFlightTotals($shift){

        $grand_total = Flight::where('user_id' , 1 )
                    ->sum('flight_time');
                    // grand total is not passed to shifts - only displayed for interest

        $shift->flight_time_365_days = Flight::where('user_id' , 1 )
        ->whereDate('date_time', '>=', $shift->date->subYear(1))
        ->sum('flight_time');

        $shift->flight_time_90_days = Flight::where('user_id' , 1 )
        ->whereDate('date_time', '>=', $shift->date->subDays(90))
        ->sum('flight_time');

        $shift->flight_time_28_days = Flight::where('user_id' , 1 )
        ->whereDate('date_time', '>=', $shift->date->subDays(28))
        ->sum('flight_time');

        $shift->flight_time_7_days = Flight::where('user_id' , 1 )
        ->whereDate('date_time', '>=', $shift->date->subDays(7))
        ->sum('flight_time');

        //$shift->save();
    }

    
    public function setFlightTotals($shift){
        // Day limits checked
        $hours_allowed_365 = Shift::MAX_FLIGHT_TIME_365_DAYS - $shift->flight_time_365_days;
        $hours_allowed_90 = Shift::MAX_FLIGHT_TIME_90_DAYS - $shift->flight_time_90_days;
        $hours_allowed_28 = Shift::MAX_FLIGHT_TIME_28_DAYS - $shift->flight_time_28_days;
        $hours_allowed_7 = Shift::MAX_FLIGHT_TIME_7_DAYS - $shift->flight_time_7_days;
        // Hour limits checked
       // $hours_allowed_168 = MAX_FLIGHT_TIME_168_HOURS - $shift->flight_time_168_hours;

        $shift->flight_time_max = min($hours_allowed_7, $hours_allowed_28, $hours_allowed_90, $hours_allowed_365);

    }

    public function setFinishAndDuration($shift){
        // If 0500 >= duty_start_time <= 0659 then set duty period to 11 hours
        $start_time = $shift->duty_start_time->format('Gi');
        //$time0500 = Carbon::createFromTime(05,00,'')->format('Gi');
       
        if ($start_time >= 1500){
            $duration = TEN_HOUR_DUTY;// If 1500 >= duty_start_time <= 2359 then set duty period to 10 hours
        } elseif ($start_time >= 1200){
            $duration = ELEVEN_HOUR_DUTY;// If 1200 >= duty_start_time <= 1459 then set duty period to 11 hours
        } elseif ($start_time >= 0700){
            $duration = TWELVE_HOUR_DUTY;// If 0700 >= duty_start_time <= 1159 then set duty period to 12 hours
        } elseif ($start_time >= 0500){
            $duration = ELEVEN_HOUR_DUTY; // If 0500 >= duty_start_time <= 0659 then set duty period to 11 hours
        } elseif ($start_time >= 0000){
            $duration = TEN_HOUR_DUTY;// If 0000 >= duty_start_time <= 0459 then set duty period to 10 hours
        }

        $shift->resetFinishTimeUsingDuration($duration);
        $shift->setDuration($duration);
        //$shift->save();
    }

    public function buildOdp($id) {
        $firstFDP = true;
        $oldshifts = Shift::all();


         foreach ($oldshifts as $oshift) {

              if ( ! $firstFDP){
                  $shift =  new Shift();
                  $shift->type = "OffDuty";
                  $shift->duty_finish_time = $oshift->duty_start_time;
                  $shift->duty_start_time = $setStart;
                  $shift->date = $oshift->date;
                  $shift->user_id = $id;
                  $shift->save();
                  // now reset andhold finish date for next DOP
                  $setStart = $oshift->duty_finish_time;


              } else { // i.e. first FDP
                  // Hold finish date for first ODP record
                  $setStart = $oshift->duty_finish_time;
                  $firstFDP = false;

              }

         }

    } 

    

    // reset the finish time using a duration (11) hour extension to the start time
    public function resetFinishTimeUsingDuration($duration){
        $this->duty_finish_time = $this->duty_start_time->addHours($duration);
    }

    // sets the duty duration (minutes) using the hour duration passed to it.
    public function setDuration($duration){
    if ($duration > 0 ) {
        $this->duty_duration =  $duration * 60;
    }
}



}

