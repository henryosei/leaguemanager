<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class League extends Model
{
    use HasFactory;

    public static function getLeague()
    {
        return DB::select("select s.season_name, count(stp.team_id) teams,count(stp.player_id) players
        from seasons s inner join season_team_players stp on stp.season_id=s.id group
        by s.season_name,stp.team_id");
    }
}
