<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PopMission extends Model
{
    use HasFactory;

    protected $fillable = [
       
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
}
