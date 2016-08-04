<!-- blade partial to display Duty Period Block -->



<!-- @include('layouts.flightTotals') -->

<div class="row">
    <div class="col-sm-12">
        <div class="progress">
            <?php
            $time = substr($shift->displayStartTime(), 0, 2); // get the first 2 numeric characters of start time
            $pre = 14 + $time;
            $odp = 40 - $time;
            // % values listed first, then PX values used for min values
            $code = 5;  $mincode = 25;
            $flight = 8; $minflight = 15;
            $fdp = 100 - $pre - $odp - $code - $flight;
            ?>
            <div class="progress-bar progress-bar-warning btn-lg-round "
                 style="min-width: {{$mincode}}px ;width: {{$code}}%">
                        <span class="pull-left time-left">
                          <strong> {{ $shift->appendice->code }}</strong>

                            </span>
            </div>
            <div class="progress-bar progress-bar-pre btn-lg-round " style="width:{{$pre}}%">
                        <span class="pull-left time-left"> <strong>{{$shift->displayDateFormat()}}</strong> - (#{{$shift->id}}
                            )

                        </span>
            </div>


            <div class="progress-bar progress-bar-fdp btn-lg-round " style="width:{{$fdp}}%">
                        <span class="pull-left time-left">
                           <strong> {{$shift->displayStartTime()}}</strong>

                        </span>
                <strong>FDP</strong>
                ( {{$shift->duty_finish_time->diffinHours($shift->duty_start_time)}} )
            </div>

            <div class="progress-bar progress-bar-pre btn-lg-round" style="color:progress-bar-pre; width: {{$odp}}%">
                        <span class="pull-left time-left">
                             <strong>{{$shift->displayFinishTime()}}</strong>
                        </span><strong>ODP</strong>
                ( xx )
            </div>

            <div class="progress-bar progress-bar-danger" style="min-width: {{$minflight}}px;width:{{$flight}}%">
                        <span class="pull-left time-left">
                                   <i class="fa fa-plane"></i><strong> {{ $shift->flight_time_max }}</span></strong>


                </span>

            </div>

        </div>


    </div><!-- /.box-header -->

</div><!-- /.box -->
