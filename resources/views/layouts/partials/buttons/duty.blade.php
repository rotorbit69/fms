<!-- blade partial to display Duty Period Block -->



        <!-- @include('layouts.flightTotals') -->

        <div class="row">
            <div class="col-sm-12">
                <div class="progress">
                    <?php $x = 35?>


                    <div class="progress-bar progress-bar-pre btn-lg-round " style="width: 19%">
                        <span class="pull-left time-left"> <strong>{{$shift->displayDateFormat()}}</strong> - (#{{$shift->id}})

                        </span>
                    </div>

                <div class="progress-bar progress-bar-warning btn-lg-round " style="width: 3%">
                        <span class="pull-left time-left">
                          <strong> {{ $shift->appendice->code }}</strong>

                            </span>

                </div>
                    <div class="progress-bar progress-bar-fdp btn-lg-round " style="width: {{$x}}%">
                        <span class="pull-left time-left">
                           <strong> {{$shift->displayStartTime()}}</strong>

                        </span>
                        <strong>FDP</strong>
                        ( {{$shift->duty_finish_time->diffinHours($shift->duty_start_time)}} )
                    </div>

                    <div class="progress-bar progress-bar-odp btn-lg-round" style="width: {{$x}}%">
                        <span class="pull-left time-left">
                             <strong>{{$shift->displayFinishTime()}}</strong>
                        </span><strong>ODP</strong>
                    </div>

                        <div class="progress-bar progress-bar-danger btn-lg-round " style="width: 8%">
                        <span class="pull-left time-left">


                                   <i class="fa fa-plane"></i><strong> + {{ $shift->flight_time_max }}</span></strong>

                            </span>

                        </div>

                </div>


            </div><!-- /.box-header -->

        </div><!-- /.box -->
