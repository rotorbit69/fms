<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('shifts/{id}', function($id) {
	$user = App\User::find($id);
	$shifts = $user->shifts;
    return view('shifts',compact('user' , 'shifts'));
});

Route::get('Briefs', function () {
    return view('InstructorBriefs');
});

Route::get('user/{id}', function($id) {
	$user = App\User::find($id);
	echo $user->name . '<br />';

	echo '<ul>';
	foreach($user->shifts as $shift){

    	echo '<li>' . 'Duration = ' . $shift->Duration . "</li>";
    } 
    echo '</ul>';   
});
