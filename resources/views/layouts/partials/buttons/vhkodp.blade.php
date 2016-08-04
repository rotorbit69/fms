<!-- Off Duty Period ODP Button details -->

<div class="col-md-4">
    <button type="button" class="btn bg-navy btn-block" data-toggle="tooltip" title="
	This is the Off Duty Period - You can modify it by clicking on it." data-placement="top">
        {{ $shift-> odp_start_time }}
        -----ODP
        <i class="fa fa-moon-o"></i>
        <i class="fa fa-lock"></i>
        <i class="fa fa-gears"></i>
        <i class="fa fa-random"></i>
        [{{$shift->odp_start_time - $shift-> odp_finish_time }}]
        ---
        {{ $shift-> odp_finish_time }}
    </button>
</div>