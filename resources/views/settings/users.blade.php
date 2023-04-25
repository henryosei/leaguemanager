@extends("layout.master")
@section("content")
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">System User</h1>
            <a href="/system/users/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Create User</a>
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
                            <th>Full Name</th>
                            <th>Role</th>
                            <th>Email</th>

                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($users as $u)
                        <tr>
                            <td>{{$u->name}}</td>
                            <td>@switch($u->user_role)
                                    @case("A")
                                        Admin
                                    @break
                                    @case("L")
                                        League manager
                                    @break
                                    @case("U")
                                        User
                                    @break


                            @endswitch
                            </td>
                            <td>{{$u->email}}</td>
                            <td>{{$u->created_at}}</td>
                            <td><a href="">Edit</a></td>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@stop
