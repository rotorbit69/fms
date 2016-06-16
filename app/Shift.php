<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    //
    protected $fillable = [
        'StartTime', 'Duration', 'user_id',
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function appendix(){
    	return $this->belongsTo('App\Appendix');
    }


		/** this function allow you to overide a seeded value before it is created
		* in this case Duration is being set at '60'
		
		public function setDurationAttribute($value){
		$this->attributes['Duration'] = '60';
		}
		*/
}

