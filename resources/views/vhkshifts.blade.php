@extends('layouts.app')

@section('htmlheader_title')
	VHK Test Screen
@endsection


@section('main-content')
	<div class="container spark-screen">

		<?php  $grand_total = App\Flight::where('user_id' , 1 )->sum('flight_time'); ?>

	   
     
	    </div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">

						<div class="panel-heading">
					 		Pilot :<strong> {{ $user->name }}</strong> : Duty Period
					 	<div>
					 	<hr>
						 	</div>
						 		@include('layouts.flightTotals')
							</div>
							
						<div class="panel-body">
							<div class="row">
								@include('layouts.partials.buttons.titlebar')
									@foreach ($shifts as $shift)
										

											@include('layouts.partials.buttons.date')

											@include('layouts.partials.buttons.flight')
											  
											@include('layouts.partials.buttons.fdp')

											@include('layouts.partials.buttons.odp')

										
							 		@endforeach  
							</div>
									<div class="box-footer">
									Select a period to make changes.
									</div><!-- box-footer -->
						</div>
				</div>
			</div>
		</div>
	</div>


@include('layouts.partials.modal.mymodal2')
