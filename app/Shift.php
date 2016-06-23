<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Shift extends Model
{
    //
    protected $fillable = [
        'StartTime', 'duration', 'user_id',
        ];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function appendice(){
    	return $this->belongsTo('App\Appendice');
    }
    protected $dt;

    public function hourMin(){
      return Carbon::now()->hour . ":" . Carbon::now()->minute;
      
    }

    protected $dates = ['date', 'duty_start_time', 'duty_finish_time'];

		/** this function allow you to overide a seeded value before it is created
		* in this case Duration is being set at '60'
		
		public function setDurationAttribute($value){
		$this->attributes['Duration'] = '60';
		}
		*/

        public function setduty_start_timeAttribute($value){
         $this->attributes['duty_start_time'] =  DateTime::createFromFormat('m/d/y h:i', '02/26/11 08:00');
        }
}

