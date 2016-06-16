<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appendice extends Model
{
    //
    protected $fillable = [
         'user_id',
    ];

    public function shift(){
    	return $this->belongsTo('App\Shift');
    }


		
		
		
}

