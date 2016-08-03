@extends('layouts.app')

@section('htmlheader_title')
	VHK Test Screen
@endsection



@section('main-content')
	<div class="container spark-screen">

		
	
	</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">
					 		Pilot :<strong> {{ $user->name }}</strong> : Duty Period ( xx/xx/xx - xx/xx/xx )
					 	<hr>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									<div class="box box-primary">

										<div class="box-header with-border">
									@foreach ($shifts as $shift)

										@if ($shift->type == "Duty" )

										<?php  $grand_total = App\Flight::where('user_id' , 1 )
										->sum('flight_time'); ?>

										<?php  $year_total = App\Flight::where('user_id' , 1 )
										->whereDate('date_time', '>=', $shift->date->subYear(1))
										->sum('flight_time'); ?>

										<?php  $three_month_total = App\Flight::where('user_id' , 1 )
										->whereDate('date_time', '>=', $shift->date->subDays(90))
										->sum('flight_time'); ?>

										<?php  $one_month_total = App\Flight::where('user_id' , 1 )
										->whereDate('date_time', '>=', $shift->date->subDays(28))
										->sum('flight_time'); ?>

										<?php  $one_week_total = App\Flight::where('user_id' , 1 )
										->whereDate('date_time', '>=', $shift->date->subDays(7))
										->sum('flight_time'); ?>

											@include('layouts.partials.buttons.duty')
										@else

											

										@endif

							 		@endforeach
										</div><!-- /.box-header -->
									</div><!-- /.box-primary -->

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@include('layouts.partials.modal.mymodal2')

@endsection
