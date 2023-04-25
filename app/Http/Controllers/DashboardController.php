<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $teams=Team::count();

        return view("dashboard",["teams"=>$teams]);
    }
}

