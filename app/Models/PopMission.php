<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PopMission extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'status',
        'description',
        'pop_id',
        'tittle',
    ];
    public function pop()
    {
        return $this->belongsTo('App\Models\Pop', 'id', 'pop_id');
    }

    public function missionProcesses()
    {
        return $this->hasMany('App\Models\MissionProcess', 'pop_mission_id', 'id');
    }

    public function overallView()
    {
        return $this->hasOne('App\Models\OverallView', 'pop_id', 'id');
    }

    public function detailedView()
    {
        return $this->hasOne('App\Models\PopMissionDetailedModel', 'pop_mission_id', 'id');
    }
}
