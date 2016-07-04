<strong>Flight Time Totals</strong>
					 	    
					 	    <div>
					 	    	<div class="btn-group btn-group-xs">
									<button type="button" class="btn btn-primary btn-group-xs">
									Available: <strong>{{ $shift->flight_time_max }}</span></strong>
									</button>
								</div>
								<div class="btn-group btn-group-xs">
									<button type="button" class="btn btn-default btn-group-xs">
									7Day Total: <strong>{{ $shift->flight_time_7_days }}</strong>
									</button>
								</div>
								<div class="btn-group btn-group-xs">
									<button type="button" class="btn btn-default btn-group-xs">
									28Day: <strong>{{$shift->flight_time_28_days}}</strong>
									</button>
								</div>
								<div class="btn-group btn-group-xs">
									<button type="button" class="btn btn-default btn-group-xs">
									90Day: <strong>{{$shift->flight_time_90_days}}</strong>
									</button>
								</div>
								<div class="btn-group btn-group-xs">
									<button type="button" class="btn btn-default btn-group-xs">
									365Day: <strong>{{ $shift->flight_time_365_days }}</strong>
									</button>
								</div>
								
							</div>