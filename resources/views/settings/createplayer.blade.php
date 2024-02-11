@extends("layout.master")
@section("content")

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Create Player</h1>
        <p class="mb-4">
        </p>

        <!-- DataTales Example -->
        <div class="col-md-6 offset-3">
            <div class="card shadow mb-4 ">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">League Information</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Player name</label>
                                <input class="form-control" required name="player_name"></div>
                        </div>

                        <div class="col-md-12">

                            <div class="form-group">
                                @csrf
                                <label for="exampleFormControlSelect1">Position</label>
                                <select name="position" id="" required class="form-control">
                                    <option value=""></option>
                                    <option value="K">Keeper</option>
                                    <option value="D">Defender</option>
                                    <option value="M">Mid-fielder</option>
                                    <option value="S">Striker</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                @csrf
                                <label for="exampleFormControlSelect1">Player Picture</label>
                                <input class="form-control"  type="file" accept="image/jpeg" name="player_picture">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input class="form-control btn btn-primary" type="submit">
                        </div>
                    </form>


                </div>
            </div>
        </div>


    </div>
@stop
