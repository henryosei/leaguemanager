<?php

namespace App\Http\Controllers;

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
        $teams=Team::all();
        return view("settings.createleague");
    }


}
