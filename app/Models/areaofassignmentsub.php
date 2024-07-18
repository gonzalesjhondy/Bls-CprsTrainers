<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class areaofassignmentsub extends Model
{
    protected $table = 'areaofassignmentsubs';
    protected $guarded = array();

    protected $fillable = [
        'AreaOfAssignmentId', 
        'AreaAssignmentSub',
       
    ];

    public function areaofassignment() {
        return $this->belongsTo(AreaOfAssignment::class, 'AreaOfAssignmentId', 'id');
    }
}
