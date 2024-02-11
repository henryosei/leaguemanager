@extends("layout.master")
@section("content")

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Create League</h1>
        <p class="mb-4">
        </p>

        <!-- DataTales Example -->
        <div class="col-md-6 offset-3">
            <div class="card shadow mb-4 ">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">League Information</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Team name</label>
                                <input class="form-control" name="team_name"></div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                @csrf
                                <label for="exampleFormControlSelect1">Captain</label>
                                <input class="form-control" name="coach"></div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                @csrf
                                <label for="exampleFormControlSelect1">Team Logo</label>
                                <input class="form-control" type="file" accept="image/jpeg" name="team_logo">
                            </div>
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
