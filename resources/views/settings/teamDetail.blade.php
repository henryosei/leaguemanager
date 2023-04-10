@extends("layout.master")
@section("content")
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Teams</h1>
            <a href="/system/teams/player/create/{{request()->id}}"
               class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Create Player</a>
        </div>
        <p class="mb-4">
        </p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Team Details</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Player name</th>
                            <th>Position</th>

                            <th>Created At</th>

                            <th>Action</th>
                        </tr>
                        </thead>
                        @foreach($players as $p)
                            <tr>
                                <td>{{$p->full_name}}</td>
                                <td>@switch($p->position)
                                        @case("K")
                                            <span class="badge badge-success">Keeper</span>
                                            @break
                                        @case("D")
                                            <span class="badge badge-success">Defender</span>
                                            @break
                                        @case("M")
                                            <span class="badge badge-success">Mid-fielder</span>
                                            @break
                                        @case("S")
                                            <span class="badge badge-success">Striker</span>
                                            @break
                                    @endswitch</td>


                                <td>{{$p->created_at}}</td>
                                <td><a href="/system/teams/player/{{$p->uuid}}" class="btn btn-sm btn-outline-success">Player Statistics</a>
                                </td>
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
