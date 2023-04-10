<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'team_name',
        'coach_name'];

    protected static function boot()
    {
        self::creating(function($model){
            $model->uuid=Uuid::uuid4();
        });
        parent::boot(); // TODO: Change the autogenerated stub
    }


}
