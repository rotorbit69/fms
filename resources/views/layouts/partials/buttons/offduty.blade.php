<!-- blade partial to display Off Duty Period Block -->

<div class="box box-danger">

	<div class="box-header with-border">

		<p>(#{{$shift->id}}){{$shift->duty_start_time->toDayDateTimeString()}}</p>
		<hr>
		<h3 class="box-title">
		<strong>{{$shift->type}}</strong>
		 Period : {{$shift->duty_finish_time->diffinHours($shift->duty_start_time)}}:{{sprintf('%02d',fmod($shift->duty_finish_time->diffinMinutes($shift->duty_start_time),60))}}
			<small class="label label-default"></i>{{ $shift->appendice->code }}</small>
			<i class="fa fa-lock"></i>
			<i class="fa fa-gears"></i>
			<i class="fa fa-random"></i>
			@if ($shift->odp_normal_sleep_period_flag == true)
				<i class="fa fa-lock"></i>
			@endif
			

		</h3>
		    <div class="box-tools pull-right">
		      @if ($shift->locked_flag == true)
		      <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="Shift can be unlocked via your User page <Link here>" data-placement="left">Locked</button>
		     @else
		     <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal2">Edit</button>
		     @endif
			</div><!-- /.box-tools -->

	</div><!-- /.box-header -->

		<div class="box-body">
		
		<p>{{$shift->duty_finish_time->toDayDateTimeString()}}</p>

		</div><!-- /.box-body -->
</div><!-- /.box -->