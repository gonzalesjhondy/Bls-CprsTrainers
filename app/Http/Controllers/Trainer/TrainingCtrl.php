<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trainer;
use App\Models\HistoryBlsTraining;

class TrainingCtrl extends Controller
{
    //
    public function ViewTrainings($id){
        
        $trainer_data = Trainer::find($id);

        return view('blstraining.Viewtrainings', ['trainer' => $trainer_data]);
    }

    public function AddTriningHistory(Request $req){
      
      $trainer_id = $req->input('trainer_id');
      $agency_conduct = $req->input('agencyConduct');

      $trainer = Trainer::find($trainer_id);

      $history_training = new HistoryBlsTraining();

      $history_training->dateTraining = $req->input('dateTraining');
      $history_training->address = $req->input('placeTraining');
      if($agency_conduct == "others"){
        $history_training->agency =  $req->input('other_counduct_agency');
      }else if($agency_conduct != "others"){
        $history_training->agency = $agency_conduct;
      }
      $history_training->Totid_number = $req->input('Tot_Idnumber');
      $history_training->conducted_status = $req->input('conductedStatus');
      $history_training->trainer_id = $trainer->id;
      $history_training->save();
      
      return redirect()->route('trainer.index');

    }
}
