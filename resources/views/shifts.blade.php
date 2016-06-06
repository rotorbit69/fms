@extends('layouts.app')

@section('htmlheader_title')
	VHK Test Screen
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">

    	<div class="row">

       
			
			<div class="panel panel-default">

				<div class="panel-heading"> Pilot : {{ $user->name }}
				</div>
					<div class="panel-body">
						
						<div class="box-footer">

							@foreach ($shifts as $shift)
								
								<div class="progress progress-s">
									<div class="progress-bar progress-bar-danger " role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="min-width: 20px; width: {{$shift->Duration / 10 }}%">
									Flight Duty Period 0000 - {{$shift->Duration}}
									<span class="sr-only">60% Complete (warning)</span>
									</div>
								</div>


							 @endforeach  

						</div><!-- box-footer -->
					</div>
			</div>

				
              
			</div>
		</div>
	</div>
@endsection
