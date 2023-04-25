<?php

namespace App\Http\Controllers;

use App\Models\Season;
use App\Models\SeasonSchedule;
use App\Models\Team;
use Illuminate\Http\Request;

class LeagueController extends Controller
{
    public function schedule()
    {
        return view("league.schedule");
    }

    public function table()
    {
        return view("league.leaguetable");
    }


    public function league()
    {
        return view("settings.league");
    }

    public function createLeague()
    {
        $teams = Team::all();
        return view("settings.createleague");
    }

    public function postCreateLeague(Request $request)
    {
        $team = Team::all();

        $season = Season::createSeason($request);
        $arr = [];

        for ($i = 0; $i < count($team); $i++) {
            for ($j = 1; $j < count($team); $j++) {
                if ($team[$i]->id != $team[$j]->id || $team[$j]->id != $team[$i]->id) {
                    $arr[$i] = ($team[$i]->team_name . " vs " . $team[$j]->team_name);
                }
                //SeasonSchedule::generateSchedule(1,$team[$i]->id,$team[$j]->id,$season->id);

            }
        }

        shuffle($arr);
        dd($arr);
        for ($i = 0; $i < count($arr); $i++) {

            SeasonSchedule::generateSchedule(1, trim(explode("vs", $arr[$i])[0]), trim(explode("vs", $arr[$i])[1]),1231);

        }
        return $request->season;
    }


}
