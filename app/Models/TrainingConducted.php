<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingConducted extends Model
{
    use HasFactory;
    protected $table = 'training_conducted';
    protected $guarded = array();
}
