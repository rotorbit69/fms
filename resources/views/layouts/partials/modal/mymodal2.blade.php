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
                     2	Increase in FDP limits by split duty
	2.1	If an FDP contains a split-duty rest period of at least 3 consecutive hours at suitable sleeping accommodation, the maximum FDP worked out under clause 1 may be increased by the duration of the split-duty rest period.
	2.2	If an FDP contains a split-duty rest period of at least 4 consecutive hours at suitable resting accommodation, the FDP limits under clause 1 may be increased by 2 hours.
	2.3	Any portion of an FDP remaining after a split-duty rest period must be no longer than the sum of 6 hours and any permitted extension under clause 3.
Note   These are the maximum FDP limits under this Appendix unless, for any particular FCM, other provisions have the effect of reducing these limits (for example, subsections 14 and 15 of this Order).
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

