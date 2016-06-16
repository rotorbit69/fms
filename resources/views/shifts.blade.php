@extends('layouts.app')

@section('htmlheader_title')
	VHK Test Screen
@endsection


@section('main-content')
	<div class="container spark-screen">

		<?php  $grand_total = App\Flight::where('user_id' , 1 )->sum('flight_time') / 60; ?>

	   
     
	    </div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">

					<div class="panel-heading">
					 	Pilot :<strong> {{ $user->name }}</strong> : Duty Period
					 	<div>
					 	<hr>
					 	</div>
					 		<strong>Flight Time Totals</strong>
					 	    <button type="button" class="btn btn-default btn-xs" style="float:right;">Help</button>
					 	    <div>
					 	    	
								<div class="btn-group btn-group-xs">
									<button type="button" class="btn btn-default btn-group-xs">
									7Day Total: <strong><span style="color:red">56.1</span></strong>
									</button>
								</div>
								<div class="btn-group btn-group-xs">
									<button type="button" class="btn btn-default btn-group-xs">
									28Day Total: <strong>143.8</strong>
									</button>
								</div>
								<div class="btn-group btn-group-xs">
									<button type="button" class="btn btn-default btn-group-xs">
									90Day Total: <strong>467.3</strong>
									</button>
								</div>
								<div class="btn-group btn-group-xs">
									<button type="button" class="btn btn-default btn-group-xs">
									365Day Total: <strong>1211.5</strong>
									</button>
								</div>
								<div class="btn-group btn-group-xs">
									<button type="button" class="btn btn-default btn-group-xs">
									Grand Total: <strong>{{ $grand_total }}</strong>
									</button>
								</div>
							</div>
					</div>
						<div class="panel-body">
								<div class="row">
									<div class="col-md-9">

										@foreach ($shifts as $shift)
							
										<div class="btn-group btn-group-xs">

											@include('layouts.partials.buttons.date')
											  
											@include('layouts.partials.buttons.fdp')

											@include('layouts.partials.buttons.odp')

											@include('layouts.partials.buttons.flight')
											

										</div>	

							 		@endforeach  
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



<!--  New myModal2 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">{{ $user->name }} - Duty Period Details</h4>
      </div>
      <div class="modal-body">
       <!-- start of accordian content -->
	<div class="box box-solid">
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
        <!-- Accordian Duty Time panel -->
                <div class="panel box box-default">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        Duty Details
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="box-body">


					<div class="btn-group btn-group-xs" data-toggle="buttons">
					 <p>Duty Start Time</p>
					@for ($i = 1; $i < 25; $i++)
					  <label class="btn btn-default" >
					    <input type="radio" name="options" id="option" {{ $i }}'"' autocomplete="off"> {{ sprintf("%02d", $i ) }}
					  </label>
					@endfor
					</div>
					<div class="btn-group btn-group-xs" data-toggle="buttons">
					<p>Duty Finish Time </p>
					@for ($i = 1; $i < 25; $i++)
					  <label class="btn btn-default">
					    <input type="radio" name="options" id="option" {{ $i }}'"' autocomplete="off"> {{ sprintf("%02d", $i ) }}
					  </label>

					@endfor
					 <p> Minutes 35</p>
					
					</div>
					<div class="row">
					<div class="well">
					<p>Pre Postining Time: 1:14</p>
					<p>(Total of any non flying duties in the preceeding 8 hrs before the FDP period.)</p>
					</div>
					</div>

					<div class="row">
					<div class="well">
					<p>Post Postining Time: 0:50</p>
					<p>(Total of any non flying duties / transport after the flight period. Note : Any post positioning entered that exceeds the FDP is treated as a reasignment extension.)</p>
					</div>
					</div>
					
					<!-- End of Button Bar for Time Selection -->
                    </div>
                  </div>
                </div>
       <!-- Accordian panel for the Rules -->
                <div class="panel box box-danger">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                        <i class="fa fa-gears"></i> Appendix 5 - Rules applied
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="box-body">
                      Default roster applied 0600 - 1300.
                      #1 - FDP start time 0600 extends duty to 1600.
                      User changed FDP times 0900 - 1800.
                    </div>
                  </div>
                </div>
       <!-- Accordian panel for the Split Shifts -->
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                        <i class="fa fa-pie-chart"></i> Split Shift
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                    <div class="box-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                      wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa 
                      labore sustainable VHS.
                    </div>
                  </div>
                </div>
        <!-- /Accordian Split Shift end -->
        <!-- Accordian panel for the Extensions Shifts -->
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                        <i class="fa fa-plus"></i> FDP Reassignment / Extensions
                      </a>
                    </h4>
                  </div>
                  <div id="collapseFour" class="panel-collapse collapse">
                    <div class="box-body">
                     <div class="row">
					<div class="well">
					<p>Reassignment/Extension Time: 0:50</p>
					<p>(Extend the FDP by a period not exceeding 4 hours. Note: Post flight additions may have already contributed to the extension.)</p>
					</div>
					</div>
                    </div>
                  </div>
                </div>
        <!-- /Accordian Shift Extensions end -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
       <!-- end of accordian content -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
	</div>












</div>

@endsection
