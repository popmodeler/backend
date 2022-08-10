<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConstituentProcess extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'description',
        'file_name',
        'file_type',
        'location',
        'alliance_member_id',
        'user_id',
    ];

    public function AllianceMember()
    {
        return $this->belongsTo('App\Models\AllianceMember', 'id', 'alliance_member_id');
    }

    public function users()
    {
        $result = $this->hasOne('App\Models\User', 'id', 'user_id');
        return $result;
    }
}
