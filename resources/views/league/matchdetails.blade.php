@extends("layout.master")
@section("content")

    <div class="container-fluid">

        <!-- Page Heading -->

        <h1 class="h3 mb-2 text-gray-800">Match day @if($match->match_status=='PENDING')
                <a href="/league/detail/{{request()->id}}/start" class="btn btn-success btn-sm">Start match</a>
            @elseif($match->match_status=='STARTED')
                <a href="" class="btn btn-primary btn-sm">Match ongoing</a>
                <a href="/league/detail/{{request()->id}}/end" class="btn btn-danger btn-sm">Mark as completed</a>
            @else
                <a href="#" class="btn btn-success btn-sm">Match Completed</a>
            @endif</h1>
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
                                    @if(count($details)==0)
                                        0
                                    @else
                                            <?php $home = 0 ?>
                                        @foreach($details as $d)
                                            @if($d->team_id==$match->home_id)
                                                    <?php $home++; ?>
                                            @endif
                                        @endforeach
                                        {{$home}}
                                    @endif
                               </span>
                                <div class="col-md-12">
                                    <input type="hidden" name="ground" value="home">
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
                            @if($match->match_status=='STARTED')
                                <input class="form-control btn btn-primary" value="Record goal" type="submit">
                                <input name="match_id" value="{{$match->id}}" type="hidden">
                                <input name="team_id" value="{{$match->home_id}}" type="hidden">
                                <ol>

                                    @foreach($details as $d)
                                        @if($d->team_id==$match->home_id)
                                            <li>{{$d->full_name}}: {{$d->time_scored}}</li>
                                        @endif
                                    @endforeach
                                </ol>
                            @endif

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
                            <label for="exampleFormControlSelect1"><b>Away team</b>: {{$match->away_team}}</label>
                            <div>
                               <span class="text-right" style="font-size: 50px;text-align: right">
                                    @if(count($details)==0)
                                       0
                                   @else
                                           <?php $count = 0 ?>
                                       @foreach($details as $d)
                                           @if($d->team_id==$match->away_id)
                                                   <?php $count++; ?>
                                           @endif
                                       @endforeach
                                       {{$count}}
                                   @endif
                                   {{----}}
                               </span>
                            </div>
                            <div class="row">
                                <input type="hidden" name="ground" value="home">
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
                            @if($match->match_status=='STARTED')
                                <input name="match_id" value="{{$match->id}}" type="hidden">
                                <input name="team_id" value="{{$match->away_id}}" type="hidden">
                                <input class="form-control btn btn-primary" value="Record goal" type="submit">
                                <ol>

                                    @foreach($details as $d)
                                        @if($d->team_id==$match->away_id)
                                            <li>{{$d->full_name}}: {{date("G:h ",strtotime($d->time_scored))}}</li>
                                        @endif
                                    @endforeach
                                </ol>
                            @endif


                            <br>
                        </form>

                    </div>
                </div>
            </div>

        </div>


    </div>
@stop
