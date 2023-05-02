<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pop extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'description',
        'business_alliance_id',
    ];


    public function businessAlliance()
    {
        return $this->belongsTo('App\Models\BusinessAlliance', 'business_alliance_id', 'id');
    }

    public function popMissions()
    {
        return $this->hasMany('App\Models\PopMission', 'pop_id', 'id');
    }
    public function overallView()
    {
        return $this->hasOne('App\Models\OverallView', 'id', 'id');
    }
    public function PopMissionModel()
    {
        return $this->hasOne('App\Models\PopMissionsModel', 'id', 'id');
    }
}
