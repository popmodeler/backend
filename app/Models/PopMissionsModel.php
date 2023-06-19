<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PopMissionsModel extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'file_text',
        'user_id',
        'pop_id',
        'pop_missions_constraints_model',
        'updated',
    ];


    public function pop()
    {
        return $this->belongsTo('App\Models\Pop', 'pop_id', 'id');
    }
}
