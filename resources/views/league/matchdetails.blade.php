@extends("layout.master")
@section("content")

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Match day <a href="" class="btn btn-danger btn-sm">Mark as finished</a></h1>
        <p class="mb-4">

        </p>

        <div class="row">
            <!-- DataTales Example -->
            <div class="col-md-6">

                <div class="card shadow mb-4 ">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Home Team</h6>
                    </div>
                    <div class="card-body">
                        <form method="post" action="">
                            @csrf
                            <label for="exampleFormControlSelect1"><b>Home team</b>: {{$match->home_team}}</label>

                            <div class="row">
                                <span style="font-size: 50px">
                                    @if($match->home_id==$goals[1]->id)
                                        {{$goals[0]->goals}}
                                    @endif
                               </span>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Player name</label>
                                                <select name="player_id" id="" required class="form-control">
                                                    <option value=""></option>
                                                    @foreach($players as $p)
                                                        @if($match->home_id==$p->team_id)
                                                            <option value="{{$p->id}}">{{$p->full_name}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Goal scored time</label>
                                                <input type="time" class="form-control" name="time_scored">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <input class="form-control btn btn-primary" value="Record goal" type="submit">
                            <input name="match_id" value="{{$match->id}}" type="hidden">
                            <input name="team_id" value="{{$match->home_id}}" type="hidden">

                            <br>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow mb-4 ">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Away Team: </h6>
                    </div>

                    <div class="card-body">
                        <form method="post" action="">
                            @csrf
                            <label for="exampleFormControlSelect1"><b>Away team</b>: {{$match->home_team}}</label>
                            <div>
                               <span style="font-size: 50px">
                                    @if($match->away_id==$goals[0]->id)
                                       {{$goals[1]->goals}}
                                   @endif
                               </span>
                            </div>
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Player name</label>
                                                <select name="player_id" id="" required class="form-control">
                                                    <option value=""></option>
                                                    @foreach($players as $p)
                                                        @if($match->away_id==$p->team_id)
                                                            <option value="{{$p->id}}">{{$p->full_name}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Goal scored time</label>
                                                <input type="time" class="form-control" name="time_scored">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <input name="match_id" value="{{$match->id}}" type="hidden">
                            <input name="team_id" value="{{$match->away_id}}" type="hidden">
                            <input class="form-control btn btn-primary" value="Record goal" type="submit">


                            <br>
                        </form>

                    </div>
                </div>
            </div>

        </div>


    </div>
@stop
