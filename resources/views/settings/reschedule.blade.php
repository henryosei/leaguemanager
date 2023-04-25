@extends("layout.master")
@section("content")

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Reschedule Match</h1>
        <p class="mb-4">
        </p>

        <!-- DataTales Example -->
        <div class="col-md-6 offset-3">
            <div class="card shadow mb-4 ">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Match Information</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="">
                        <div class="col-md-12">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlSelect1"><b>Home team</b>: {{$schedule->home_team}}</label>

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1"><b>Away team</b>: {{$schedule->away_team}}</label>

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1"><b>Scheduled date</b>: {{date('d M, Y',strtotime($schedule->date_scheduled))}}</label>

                            </div>

                        </div>
                        <div class="col-md-12">

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Rescheduled date</label>
                                <input type="date" name="rescheduled_date" class="form-control" required>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="form-group">

                                <input class="form-control btn btn-primary" type="submit"></div>
                        </div>


                        <br>
                    </form>

                </div>
            </div>
        </div>


    </div>
@stop
