<?php

namespace App\Http\Controllers;

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
}
