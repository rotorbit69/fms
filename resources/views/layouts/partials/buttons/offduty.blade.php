<!-- blade partial to display Duty Period Block -->
	<div class="box box-primary">
										
		<div class="box-header with-border">

		<p>(#{{$shift->id}}){{$shift->duty_start_time->toDayDateTimeString()}}</p>

		<hr>
		<h3 class="box-title">
		<strong>{{$shift->type}}</strong>
		 Period : {{$shift->duty_finish_time->diffinHours($shift->duty_start_time)}}:{{sprintf('%02d',fmod($shift->duty_finish_time->diffinMinutes($shift->duty_start_time),60))}}
			<small class="label label-default"></i>{{ $shift->appendice->code }}</small>

			
		
			

			<i class="fa fa-car"></i>
			<i class="fa fa-pie-chart"></i>
			<i class="fa fa-gears"></i>
			<i class="fa fa-plus-square"></i>
			<i class="fa fa-plus"></i>
		
			

		</h3>
		    <div class="box-tools pull-right">
		      
			@if ($shift->locked_flag)
		      <button type="button" class="btn btn-default btn-xs fa fa-lock"> Locked</button>
		     @else
		      <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal2">Edit</button>
			@endif
		     
			</div><!-- /.box-tools -->
		</div><!-- /.box-header -->
		<div class="box-body">
		
		
		<p>{{$shift->duty_finish_time->toDayDateTimeString()}}</p>
		</div><!-- /.box-body -->
	</div><!-- /.box -->