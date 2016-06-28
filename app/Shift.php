<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Shift extends Model
{
    //
     // MASS ASSIGNMENT -------------------------------------------------------
    // define which attributes are mass assignable (for security)
    // we only want these 3 attributes able to be filled
    protected $fillable = [
        'StartTime', 'duration', 'user_id',
        ];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function appendice(){
    	return $this->belongsTo('App\Appendice');
    }
    
    protected $dates = ['date', 'duty_start_time', 'duty_finish_time'];

    



}

