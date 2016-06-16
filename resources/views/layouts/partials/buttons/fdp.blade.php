<!-- Flight Duty Period - Button -->


<button type="button" class="btn btn-success btn-group-xs" data-toggle="modal" data-target="#myModal2">
	{{ $shift->	duty_start_time }} -Duty[{{ $shift-> duty_finish_time - $shift-> duty_start_time }}]-
	<i class="fa fa-car"></i>
	<i class="fa fa-pie-chart"></i>
	<i class="fa fa-gears"></i>
	<i class="fa fa-plus-square"></i>
	<i class="fa fa-plus"></i>
	 {{ $shift-> duty_finish_time }}

</button>