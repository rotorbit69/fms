<!-- Flight Duty Period - Button -->

<div class="col-md-4">

    <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal2">
        {{ $shift->	duty_start_time->format("H.i") }}
        <small class="label label-danger"></i>{{ $shift->appendice->code }}</small>
        -Duty[]-
        <i class="fa fa-car"></i>
        <i class="fa fa-pie-chart"></i>
        <i class="fa fa-gears"></i>
        <i class="fa fa-plus-square"></i>
        <i class="fa fa-plus"></i>

        {{ $shift-> duty_finish_time->format("H.i") }}

    </button>
</div>