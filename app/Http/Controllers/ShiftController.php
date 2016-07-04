<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use App\Shift;
use App\Flight;

class ShiftController extends Controller
{
  
/**
     * Create a new Shift controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


	/**
     * Display all shifts for a id .
     *
     * @var string
     */

	


	public function allShifts($id) {

		$user = User::find($id);
		$shifts = $user->shifts;

			foreach ($shifts as $shift){
			 	$shift->setFinishAndDuration($shift); //sets finish and duration time using the start time
				$shift->getFlightTotals($shift); // determine flight totals from flight logbook
				$shift->setFlightTotals($shift); // set flight limits associated with Appendix

				$shift->save();
			}

		$flights = $user->flights;
		//var_dump($year_total);
	    return view('shifts',compact('user' , 'shifts' , 'flights'));
	}
   
			

}
