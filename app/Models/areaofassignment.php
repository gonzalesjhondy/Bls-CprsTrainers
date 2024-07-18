<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class areaofassignment extends Model
{
    protected $table = 'areaofassignments';
    protected $guarded = array();

    protected $fillable = [
        'AreaAssignmentMain',
        'AreaAssignmentOthers'
    ];

 
}
