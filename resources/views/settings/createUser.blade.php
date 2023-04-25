@extends("layout.master")
@section("content")

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Create User</h1>
        <p class="mb-4">
        </p>

        <!-- DataTales Example -->
        <div class="col-md-6 offset-3">
            <div class="card shadow mb-4 ">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">User Information</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="" enctype="multipart/form-data">

                        <div class="col-md-12">
                            <div class="form-group">
                                @csrf
                                <label for="exampleFormControlSelect1">Full name</label>
                                <input class="form-control" name="full_name"></div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Username</label>
                                <input class="form-control" required type="text" required name="username"></div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Role</label>
                                <select name="user_role" id="" class="form-control">
                                    <option value=""></option>
                                    <option value="A">Admin</option>
                                    <option value="L">League Manager</option>
                                    <option value="U">User</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Password</label>
                                <input class="form-control" required type="password" required name="passowd"></div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">

                                <input class="form-control btn btn-primary" type="submit"></div>
                        </div>
                    </form>


                </div>
            </div>
        </div>


    </div>
@stop
