@extends("layout.master")
@section("content")
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">League Match Schedule</h1>
        <p class="mb-4">
        </p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Match Schedule </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Home Team</th>
                            <th>Away team</th>
                            <th>Date Schedule</th>

                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($schedules as $schedule)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$schedule->home_team}}</td>
                            <td>{{$schedule->away_team}}</td>
                            <td>{{$schedule->date_scheduled}}</td>
                            <td><a href="/league/reschedule/{{$schedule->uuid}}"
                                   class="btn btn-outline-success btn-sm">Reschedule Match</a>
                                <a href="/league/detail/{{$schedule->uuid}}"
                                   class="btn btn-outline-danger btn-sm">Match Details</a>
                            </td>
                        <tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@stop
