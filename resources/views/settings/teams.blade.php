@extends("layout.master")
@section("content")
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Teams</h1>
            <a href="/system/teams/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Create Team</a>
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
                            <th>Team Logo</th>
                            <th>Team Name</th>
                            <th>Captain</th>

                            <th>Created At</th>

                            <th>Action</th>
                        </tr>
                        </thead>
                        @foreach($teams as $t)
                            <tr>
                                <td></td>
                                <td>{{$t->team_name}}</td>
                                <td>{{$t->coach_name}}</td>


                                <td>{{$t->created_at}}</td>
                                <td><a href="/system/teams/detail/{{$t->uuid}}" class="btn btn-sm btn-outline-success">Details</a></td>
                            </tr>
                        @endforeach

                        <tbody>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@stop
