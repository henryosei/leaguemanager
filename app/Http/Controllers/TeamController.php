<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function teams()
    {
        $teams = Team::all();
        return view("settings.teams", ["teams" => $teams]);
    }

    public function createTeamPlayer($id)
    {


        return view("settings.createplayer", ["team_id" => $id]);
    }

    public function postCreateTeamPlayer(Request $request, $id)
    {
        $team_id = Team::where("uuid", $id)->get("id");

        Player::create(["full_name" => $request->player_name, "position" => $request->position, "team_id" => $team_id[0]->id]);
        return redirect("/system/teams/detail/" . $id)->with(["success" => "Player created successfully"]);
    }

    public function teamDetail($id)
    {
        $team_id = Team::where("uuid", $id)->get("id");
        $players=Player::where("team_id", $team_id[0]->id)->get();

        return view("settings.teamDetail",["players"=>$players]);
    }

    public function createTeam()
    {
        return view("settings.createTeam");
    }

    public function postCreateTeam(Request $request)
    {
        $request->validate([
            "team_name" => "required",
            "coach" => "required|unique:teams,coach_name",
        ]);

        Team::create(["team_name" => $request->team_name, "coach_name" => $request->coach]);
        return redirect("/system/teams")->with(["success" => "Team created successfully"]);
    }
}
