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
        $schedule = SeasonSchedule::leageSchedule();


        return view("league.schedule",["schedules"=>$schedule]);
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
        $away=[];

        for ($i = 0; $i < count($team); $i++) {
            for ($j = 1; $j < count($team); $j++) {
                if ($team[$i]->team_name != $team[$j]->team_name) {

                    array_push($away, $team[$i]->team_name );
                    if (array_search( $team[$j]->team_name, $away) !== false ){
                        $arr[$i] = ($team[$i]->id . " vs " . $team[$j]->id);
                         array_push($away, $team[$j]->team_name);
                    }
                }else{
                    continue;
                }
                //SeasonSchedule::generateSchedule(1,$team[$i]->id,$team[$j]->id,$season->id);

            }
        }
        shuffle($arr);

        for ($i = 0; $i < count($arr); $i++) {

            SeasonSchedule::generateSchedule(1, trim(explode("vs", $arr[$i])[0]), trim(explode("vs", $arr[$i])[1]),1231);

        }
        return redirect("/");
    }

    public function reschedule($id)
    {
        $schedule = SeasonSchedule::leagueScheduleById($id);

        if($schedule != null){
            return view("settings.reschedule",["schedule"=>$schedule[0]]);
        }

    }

    public function postReschedule(Request $request,$id)
    {
        SeasonSchedule::reschedule($request,$id);
    }


}
