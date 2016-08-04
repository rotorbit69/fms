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


    public function allShifts($id)
    {

        $user = User::find($id);
        $shifts = $user->shifts->where('type', "Duty");

        foreach ( $shifts as $shift ) {
            $shift->setFinishAndDuration($shift); //sets finish and duration time using the start time
            $shift->getFlightTotals($shift); // determine flight totals from flight logbook
            $shift->setFlightTotals($shift); // set flight limits associated with Appendix

            $shift->save();
        }
        // Delete OffDuty Records from Table ready for recreation
        Shift::where('type', "OffDuty")->delete();

        $shift->buildOdp($id);


        $flights = $user->flights;
        $shifts = $user->shifts->sortBy('duty_start_time');

        //->where('type', 'OffDuty');
        //->where('type', "Duty")


        //$shifts = $shifts;

        // ->all();


        return view('shifts', compact('user', 'shifts', 'flights'));
    }


}
