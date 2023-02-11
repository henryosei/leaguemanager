<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function teams()
    {
        return view("settings.teams");
    }
}
