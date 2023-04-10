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
                    <form method="post" action="">
                    <div class="col-md-12">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">League Year</label>
                            <select name="" id="" class="form-control">
                                <option value="2023">2023/2024</option>
                                <option value="2024">2024/2025</option>
                                <option value="2025">2025/2026</option>
                                <option value="2026">2026/2027</option>
                            </select>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group">

                            <input class="form-control btn btn-primary"   type="submit" ></div>
                    </div>


                    <br>
                    </form>

                </div>
            </div>
        </div>


    </div>
@stop
