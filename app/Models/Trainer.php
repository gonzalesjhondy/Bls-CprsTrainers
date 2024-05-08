<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    protected $table = 'trainer';
    protected $guarded = array();

    protected $fillable = [
        'fname',
        'mname',
        'lname',
        'suffix',
        'email',
        'assignment',
        'LGU',
        'age_bracket',
        'gender',
        'profession',
        'contact_number',
        'created_by',
    ];
}
