@extends("layout.master")
@section("content")
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">League</h1>
            <a href="/system/league/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-teamspeak fa-sm text-white-50"></i> Create League</a>
        </div>
        <p class="mb-4">
        </p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">User Details</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Season</th>
                            <th>Total Teams</th>
                            <th>Total Players</th>


                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($leagues as $l)
                            <tr>
                                <td>{{$l->season_name}}</td>
                                <td>{{$l->teams}}</td>
                                <td>{{$l->players}}</td>
                                 <td><a href="" class="btn btn-sm btn-outline-success">View Stats</a></td>
                            </tr>

                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@stop
