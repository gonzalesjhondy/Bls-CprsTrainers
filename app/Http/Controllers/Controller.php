<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Trainer;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function CountTrainer(){

        $trainers = Trainer::all();

        $totaltrainers = $trainers->count(); 
        $maleTrainers = $trainers->where('gender','male')->count();
        $femaleTrainers = $trainers->where('gender', 'female')->count();
     
        return view('index', compact('totaltrainers','maleTrainers','femaleTrainers'));

    }
}
