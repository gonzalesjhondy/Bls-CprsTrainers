<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryBlsTraining extends Model
{
    use HasFactory;
    protected $table = 'history_training';
    protected $guarded = array();

    public function trainer(){
        return $this->belongsTo(Trainer::class, 'trainer_id');
    }
}
