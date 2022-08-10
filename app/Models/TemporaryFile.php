<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TemporaryFile extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'filename',
        'folder',

    ];
}
