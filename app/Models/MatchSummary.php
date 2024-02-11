<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchSummary extends Model
{
    use HasFactory;
    protected $fillable=["match_id","team_id","goals","win_loss"];

    public static function updateMatchSummary($matchId)
    {

    }
}
