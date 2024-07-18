<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profwork extends Model
{
    protected $table = 'profwork';
    protected $guarded = array();

    protected $fillable = [
        'ProfWorkDesc'
    ];
}
