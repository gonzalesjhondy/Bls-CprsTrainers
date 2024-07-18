<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agebracket extends Model
{
    protected $table = 'agebrackets';
    protected $guarded = array();

    protected $fillable = [
        'AgeBracketDesc'
    ];
}
