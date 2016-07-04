<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    //
    protected $fillable = [
         'user_id, date_time',
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }


		
		public function setregistrationAttribute($value){
		$this->attributes['registration'] = 'VH-HLK';
		}
		
		
}

