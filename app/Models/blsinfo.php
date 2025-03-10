<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blsinfo extends Model
{
    protected $table = 'blsinfos';
    protected $guarded = array();

    protected $fillable = [
        'BlsId',
        'Email',
        'Lastname',
        'Firstname',
        'Middlename',
        'Suffix',
        'Gender',
        'ContactNum',
        'AreaOfAssignment',
        'AreaOfAssignmentSub',
        'AgeBracketDesc',
        'ProfWorkDesc',
        'ProfWorkOthers',
        'TrainingDate',
        'TrainingPlace',
        'AgencyConducted',
        'ConductedSixTraining',
        'AgencyConductedOthers',
        'TrnFrom1',
        'TrnTo1',
        'TrnFtOthers1',
        'TrnFrom2',
        'TrnTo2',
        'TrnFtOthers2',
        'TrnFrom3',
        'TrnTo3',
        'TrnFtOthers3',
        'TrnFrom4',
        'TrnTo4',
        'TrnFtOthers4',
        'TrnFrom5',
        'TrnTo5',
        'TrnFtOthers5',
        'TrnFrom6',
        'TrnTo6',
        'TrnFtOthers6',
        'Status'
    ];


    public function ageBracket()
    {
        return $this->belongsTo(agebracket::class, 'AgeBracketId');
    }

    public function areaOfAssignment()
    {
        return $this->belongsTo(areaofassignment::class, 'AreaOfAssignmentId');
    }

    public function areaOfAssignmentSub()
    {
        return $this->belongsTo(areaofassignmentsub::class, 'AreaOfAssignmentSubId');
    }

    public function profWork()
    {
        return $this->belongsTo(profwork::class, 'ProfWorkId');
    }
}
