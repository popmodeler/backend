<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PopMissionDetailedModel extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'file_text',
        'user_id',
        'pop_mission_id',
        'variability_constraints_model',
        'updated',
    ];


    public function popMission()
    {
        return $this->belongsTo('App\Models\PopMission', 'id', 'pop_mission_id');
    }
}
