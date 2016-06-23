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
							
						<div class="panel-body">
							<div class="row">
								
									@foreach ($shifts as $shift)
									<div class="col-md-10">
										<div class="callout callout-info">
											{{$shift->duty_start_time->toDayDateTimeString()}}
											@include('layouts.flightTotals')
											<hr>
											<h4>Duty Period : {{$shift->duty_finish_time->diffinHours($shift->duty_start_time)}}:{{fmod($shift->duty_finish_time->diffinMinutes($shift->duty_start_time),60)}}
												<small class="label label-default"></i>{{ $shift->appendice->code }}</small>
												<i class="fa fa-car"></i>
												<i class="fa fa-pie-chart"></i>
												<i class="fa fa-gears"></i>
												<i class="fa fa-plus-square"></i>
												<i class="fa fa-plus"></i></h4>

											<button type="button" class="btn btn-default btn-xs" style="float:right;"data-toggle="modal" data-target="#myModal2">Edit</button>
											<p>{{$shift->duty_finish_time->toDayDateTimeString()}}</p>
  										</div>
									</div>
							 		@endforeach 

										<div class="col-md-9">
										
												<div class="callout callout-success">

												<p>Mon 23 Aug 2006 1800 LMT</p>
												<h4>I am an info callout!</h4>
													
												<p>Follow the steps to continue to payment.</p>
												</div>
                						
              							</div> 
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

@endsection
