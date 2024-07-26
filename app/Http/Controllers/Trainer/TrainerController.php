<?php

namespace App\Http\Controllers\Trainer;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\agebracket;
use App\Models\profwork;
use App\Models\areaofassignment;
use App\Models\areaofassignmentsub;
use App\Models\blsinfo;

use Illuminate\Support\Facades\DB;

class TrainerController extends Controller
{
    
    public function index(Request $request){
        $user = session('user');
        $ageBrackets = agebracket::all();
        $profWorks = profwork::all();
        $areaofAssignments = areaofassignment::all();
        $areaofAssignmentSub = areaofassignmentsub::all();
      
        return view('Trainers.index', compact('ageBrackets','profWorks', 'areaofAssignments','areaofAssignmentSub'));
    }

    public function aftersubmit(Request $request){
        $user = session('user');
        $ageBrackets = agebracket::all();
        $profWorks = profwork::all();
        $areaofAssignments = areaofassignment::all();
        $areaofAssignmentSub = areaofassignmentsub::all();

        return view('Trainers.aftersubmit', compact('ageBrackets','profWorks', 'areaofAssignments','areaofAssignmentSub'));
    }

    function generateBlsId() {
        $currentDate = date('mdY');
        $lastBlsInfo = \App\Models\blsinfo::where('BlsId', 'LIKE', $currentDate . '%')
                            ->orderBy('BlsId', 'desc')
                            ->first();

        if ($lastBlsInfo) {
            $lastIdNumber = (int)substr($lastBlsInfo->BlsId, 8);
            $newIdNumber = str_pad($lastIdNumber + 1, 5, '0', STR_PAD_LEFT);
        } else {
            $newIdNumber = '00001';
        }

        return $currentDate . $newIdNumber;
    }
    
    public function save(Request $request)
    {

        // dd($request->all());
        
        $request->validate([
            'BlsId' => 'nullable|string|max:255',
            'Email' => 'nullable|email',
            'Lastname' => 'nullable|string|max:255',
            'Firstname' => 'nullable|string|max:255',
            'Middlename' => 'nullable|string|max:255',
            'Suffix' => 'nullable|string|max:50',
            'Gender' => 'nullable|string|max:255',
            'ContactNum' => 'nullable|string|max:15',
            'AreaOfAssignment' => 'nullable|string|max:255',
            'AreaOfAssignmentSub' => 'nullable|string|max:255',
            'AgeBracketDesc' => 'nullable|string|max:255',
            'ProfWorkDesc' => 'nullable|string|max:255',
            'TrainingDate' => 'nullable|date',
            'TrainingPlace' => 'nullable|string|max:255',
            'AgencyConducted' => 'nullable|string|max:255',
            'ConductedSixTraining' => 'nullable|string|max:255',
            'AgencyConductedOthers' => 'nullable|string|max:255',
            'TrnFrom1' => 'nullable|date',
            'TrnTo1' => 'nullable|date',
            'TrnFtOthers1' => 'nullable|string|max:255',
            'TrnFrom2' => 'nullable|date',
            'TrnTo2' => 'nullable|date',
            'TrnFtOthers2' => 'nullable|string|max:255',
            'TrnFrom3' => 'nullable|date',
            'TrnTo3' => 'nullable|date',
            'TrnFtOthers3' => 'nullable|string|max:255',
            'TrnFrom4' => 'nullable|date',
            'TrnTo4' => 'nullable|date',
            'TrnFtOthers4' => 'nullable|string|max:255',
            'TrnFrom5' => 'nullable|date',
            'TrnTo5' => 'nullable|date',
            'TrnFtOthers5' => 'nullable|string|max:255',
            'TrnFrom6' => 'nullable|date',
            'TrnTo6' => 'nullable|date',
            'TrnFtOthers6' => 'nullable|string|max:255',
        ]);

        if (!function_exists('generateBlsId')) {
            function generateBlsId() {

                $currentDate = date('mdY');
            
                $lastBlsInfo = \App\Models\blsinfo::orderBy('BlsId', 'desc')->first();
                
                if ($lastBlsInfo) {
                    $lastIdNumber = (int)substr($lastBlsInfo->BlsId, 8, 5); 
                    $newIdNumber = str_pad($lastIdNumber + 1, 5, '0', STR_PAD_LEFT);
                } else {
                    $newIdNumber = '00001';
                }
                return $currentDate . $newIdNumber;
            }
        }
        
        $blsinfo = new blsinfo();
        $blsinfo->BlsId = generateBlsId();
        $blsinfo->Email = $request->input('Email');
        $blsinfo->Lastname = $request->input('Lastname');
        $blsinfo->Firstname = $request->input('Firstname');
        $blsinfo->Middlename = $request->input('Middlename');
        $blsinfo->Suffix = $request->input('Suffix');
        $blsinfo->Gender = $request->input('Gender','');
        $blsinfo->ContactNum = $request->input('ContactNum');
        $blsinfo->AreaOfAssignment = $request->input('AreaOfAssignment','');
        $blsinfo->AreaOfAssignmentSub = $request->input('AreaOfAssignmentSub','');
        $blsinfo->AgeBracketDesc = $request->input('AgeBracketDesc','');
        $blsinfo->ProfWorkDesc = $request->input('ProfWorkDesc','');
        $blsinfo->TrainingDate = $request->input('TrainingDate');
        $blsinfo->TrainingPlace = $request->input('TrainingPlace');
        $blsinfo->AgencyConducted = $request->input('AgencyConducted');
        $blsinfo->ConductedSixTraining = $request->input('ConductedSixTraining', '');
        $blsinfo->AgencyConductedOthers = $request->input('AgencyConductedOthers', '');
        $blsinfo->TrnFrom1 = $request->input('TrnFrom1', null); 
        $blsinfo->TrnTo1 = $request->input('TrnTo1', null); 
        $blsinfo->TrnFtOthers1 = $request->input('TrnFtOthers1', null);
        $blsinfo->TrnFrom2 = $request->input('TrnFrom2', null); 
        $blsinfo->TrnTo2 = $request->input('TrnTo2', null); 
        $blsinfo->TrnFtOthers2 = $request->input('TrnFtOthers2', null);
        $blsinfo->TrnFrom3 = $request->input('TrnFrom3', null); 
        $blsinfo->TrnTo3 = $request->input('TrnTo3', null); 
        $blsinfo->TrnFtOthers3 = $request->input('TrnFtOthers3', null);
        $blsinfo->TrnFrom4 = $request->input('TrnFrom4', null); 
        $blsinfo->TrnTo4 = $request->input('TrnTo4', null); 
        $blsinfo->TrnFtOthers4 = $request->input('TrnFtOthers4', null);
        $blsinfo->TrnFrom5 = $request->input('TrnFrom5', null); 
        $blsinfo->TrnTo5 = $request->input('TrnTo5', null); 
        $blsinfo->TrnFtOthers5 = $request->input('TrnFtOthers5', null);
        $blsinfo->TrnFrom6 = $request->input('TrnFrom6', null); 
        $blsinfo->TrnTo6 = $request->input('TrnTo6', null); 
        $blsinfo->TrnFtOthers6 = $request->input('TrnFtOthers6', null);

        $blsinfo->created_at = now()->setTimezone('Asia/Manila');
        $blsinfo->updated_at = null;
    
        $blsinfo->save();

        return redirect()->route('trainer.aftersubmit')->with('success', 'Trainer information saved successfully!');
    }
    
    public function getSubAssignments($main)
    {
        $areaAssignment = areaofassignment::where('AreaAssignmentMain', $main)->first();
    
        if ($areaAssignment) {
            $subAssignments = areaofassignmentsub::where('AreaOfAssignmentId', $areaAssignment->id)->get();
            return response()->json($subAssignments);
        }

        return response()->json([]);
    }


    public function checkBlsId(Request $request)
    {
        // Validate input
        $request->validate([
            'BlsId' => 'required|string',
        ]);

        // Check if BlsId exists in the database
        $BlsId = $request->input('BlsId');

        $exists = blsinfo::where('BlsId', $BlsId)->exists();

        return response()->json(['exists' => $exists]);
    }

    public function getBlsInfo(Request $request) {
        $blsId = $request->input('BlsId');
        $blsInfo = blsinfo::where('BlsId', $blsId)->first();
    
        if ($blsInfo) {
            return response()->json($blsInfo);
        } else {
            return response()->json(['error' => 'Bls info not found'], 404);
        }
    }

    public function updateBlsInfo(Request $request) {
        $request->validate([
            'BlsId' => 'nullable|string|max:255',
            'Email' => 'nullable|email',
            'Lastname' => 'nullable|string|max:255',
            'Firstname' => 'nullable|string|max:255',
            'Middlename' => 'nullable|string|max:255',
            'Suffix' => 'nullable|string|max:50',
            'Gender' => 'nullable|string|max:255',
            'ContactNum' => 'nullable|string|max:15',
            'AreaOfAssignment' => 'nullable|string|max:255',
            'AreaOfAssignmentSub' => 'nullable|string|max:255',
            'AgeBracketDesc' => 'nullable|string|max:255',
            'ProfWorkDesc' => 'nullable|string|max:255',
            'TrainingDate' => 'nullable|date',
            'TrainingPlace' => 'nullable|string|max:255',
            'AgencyConducted' => 'nullable|string|max:255',
            'ConductedSixTraining' => 'nullable|string|max:255',
            'AgencyConductedOthers' => 'nullable|string|max:255',
            'TrnFrom1' => 'nullable|date',
            'TrnTo1' => 'nullable|date',
            'TrnFtOthers1' => 'nullable|string|max:255',
            'TrnFrom2' => 'nullable|date',
            'TrnTo2' => 'nullable|date',
            'TrnFtOthers2' => 'nullable|string|max:255',
            'TrnFrom3' => 'nullable|date',
            'TrnTo3' => 'nullable|date',
            'TrnFtOthers3' => 'nullable|string|max:255',
            'TrnFrom4' => 'nullable|date',
            'TrnTo4' => 'nullable|date',
            'TrnFtOthers4' => 'nullable|string|max:255',
            'TrnFrom5' => 'nullable|date',
            'TrnTo5' => 'nullable|date',
            'TrnFtOthers5' => 'nullable|string|max:255',
            'TrnFrom6' => 'nullable|date',
            'TrnTo6' => 'nullable|date',
            'TrnFtOthers6' => 'nullable|string|max:255',
        ]);
    
        // Find the blsinfo record by ID
        $blsInfo = blsinfo::find($request->id);
    
        // Check if $blsInfo exists
        if (!$blsInfo) {
            return response()->json(['error' => 'Bls info not found'], 404);
        }
    
        // Update the properties
        $blsInfo->Email = $request->input('Email');
        $blsInfo->Lastname = $request->input('Lastname');
        $blsInfo->Firstname = $request->input('Firstname');
        $blsInfo->Middlename = $request->input('Middlename');
        $blsInfo->Suffix = $request->input('Suffix');
        $blsInfo->Gender = $request->input('Gender', '');
        $blsInfo->ContactNum = $request->input('ContactNum');
        $blsInfo->AreaOfAssignment = $request->input('AreaOfAssignment', '');
        $blsInfo->AreaOfAssignmentSub = $request->input('AreaOfAssignmentSub', '');
        $blsInfo->AgeBracketDesc = $request->input('AgeBracketDesc', '');
        $blsInfo->ProfWorkDesc = $request->input('ProfWorkDesc', '');
        $blsInfo->TrainingDate = $request->input('TrainingDate');
        $blsInfo->TrainingPlace = $request->input('TrainingPlace');
        $blsInfo->AgencyConducted = $request->input('AgencyConducted');
        $blsInfo->ConductedSixTraining = $request->input('ConductedSixTraining', '');
        $blsInfo->AgencyConductedOthers = $request->input('AgencyConductedOthers', '');
        $blsInfo->TrnFrom1 = $request->input('TrnFrom1', null); 
        $blsInfo->TrnTo1 = $request->input('TrnTo1', null); 
        $blsInfo->TrnFtOthers1 = $request->input('TrnFtOthers1', null);
        $blsInfo->TrnFrom2 = $request->input('TrnFrom2', null); 
        $blsInfo->TrnTo2 = $request->input('TrnTo2', null); 
        $blsInfo->TrnFtOthers2 = $request->input('TrnFtOthers2', null);
        $blsInfo->TrnFrom3 = $request->input('TrnFrom3', null); 
        $blsInfo->TrnTo3 = $request->input('TrnTo3', null); 
        $blsInfo->TrnFtOthers3 = $request->input('TrnFtOthers3', null);
        $blsInfo->TrnFrom4 = $request->input('TrnFrom4', null); 
        $blsInfo->TrnTo4 = $request->input('TrnTo4', null); 
        $blsInfo->TrnFtOthers4 = $request->input('TrnFtOthers4', null);
        $blsInfo->TrnFrom5 = $request->input('TrnFrom5', null); 
        $blsInfo->TrnTo5 = $request->input('TrnTo5', null); 
        $blsInfo->TrnFtOthers5 = $request->input('TrnFtOthers5', null);
        $blsInfo->TrnFrom6 = $request->input('TrnFrom6', null); 
        $blsInfo->TrnTo6 = $request->input('TrnTo6', null); 
        $blsInfo->TrnFtOthers6 = $request->input('TrnFtOthers6', null);
        $blsInfo->updated_at = now()->setTimezone('Asia/Manila');
        
        $blsInfo->save();
        
        return response()->json(['message' => 'Bls info updated successfully'], 200);
        
    }
    
    
    public function list (Request $request){
        
        $user = session('user');
        $blsinfos = blsinfo::all();
        $ageBrackets = agebracket::all();
        $profWorks = profwork::all();
        $areaofAssignments = areaofassignment::all();
        $areaofAssignmentSub = areaofassignmentsub::all();
    
        return view('Trainers.list', compact('blsinfos','ageBrackets','profWorks','areaofAssignments','areaofAssignmentSub'));
    }


    public function deleteblsInfo($id) {
        $blsinfo = blsinfo::find($id);
    
        if ($blsinfo) {
            $blsinfo->delete();
            return response()->json(['message' => 'Bls Information deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'Bls Informationnot found'], 404);
        }
    }

    public function agebracket (Request $request){

        $user = session('user');
        $ageBrackets = agebracket::all();

        return view('Trainers.agebracket', compact('ageBrackets'));
    }

    public function saveAgeBracket(Request $request) {
        $request->validate([
            'AgeBracketDesc' => 'required|string|max:255',
        ]);
    
        $ageBracket = new agebracket();
        $ageBracket->AgeBracketDesc = $request->input('AgeBracketDesc'); 
        $ageBracket->created_at = now()->setTimezone('Asia/Manila');
        $ageBracket->updated_at = null;
    
        $ageBracket->save();

        return response()->json(['message' => 'Age bracket saved successfully'], 200);
    }

    public function updateAgeBracket(Request $request) {
        $request->validate([
            'id' => 'required|integer|exists:agebrackets,id',
            'AgeBracketDesc' => 'required|string|max:255',
        ]);
    
        $ageBracket = agebracket::find($request->input('id'));
        $ageBracket->AgeBracketDesc = $request->input('AgeBracketDesc');
        $ageBracket->updated_at = now()->setTimezone('Asia/Manila');
    
        $ageBracket->save();
    
        return response()->json(['message' => 'Age bracket updated successfully'], 200);
    }

    public function deleteAgeBracket($id) {
        $ageBracket = agebracket::find($id);
    
        if ($ageBracket) {
            $ageBracket->delete();
            return response()->json(['message' => 'Age bracket deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'Age bracket not found'], 404);
        }
    }

    public function profwork (Request $request){
        $user = session('user');
        $profWorks = profwork::all();

        return view('Trainers.profwork', compact( 'profWorks' ));
    }

    public function saveProfWork(Request $request) {
        $request->validate([
            'ProfWorkDesc' => 'required|string|max:255',
        ]);
    
        $profWork = new profwork();
        $profWork->ProfWorkDesc = $request->input('ProfWorkDesc'); 
        
        $profWork->created_at = now()->setTimezone('Asia/Manila');
        $profWork->updated_at = null;
    
        $profWork->save();
    
        return response()->json(['message' => 'Prof Work saved successfully'], 200);
    }

    public function updateProfWork(Request $request) {
        $request->validate([
            'id' => 'required|integer',
            'ProfWorkDesc' => 'required|string|max:255',
        ]);
    
        $profWork = profwork::findOrFail($request->id);
        $profWork->ProfWorkDesc = $request->input('ProfWorkDesc');
        
        $profWork->updated_at = now()->setTimezone('Asia/Manila');

        $profWork->save();
   
        return response()->json(['message' => 'Area of assignment main updated successfully'], 200);
    }

    public function deleteProfWork($id) {
        $profWork = profwork::find($id);
    
        if ($profWork) {
            $profWork->delete();
            return response()->json(['message' => 'Age bracket deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'Age bracket not found'], 404);
        }
    }

    public function areaofassignmentmain (Request $request){
        $user = session('user');
        $areaofAssignments = areaofassignment::all();
    
        return view('Trainers.areaofassignmentmain', compact('areaofAssignments'));
    }

    public function saveAreaOfAssignment(Request $request) {
        $request->validate([
            'AreaAssignmentMain' => 'required|string|max:255',
            'AreaAssignmentSub' => 'sometimes|string|max:255'
        ]);
    
        $areaofAssignment = new areaofassignment();
        $areaofAssignment->AreaAssignmentMain = $request->input('AreaAssignmentMain'); 
        $areaofAssignment->created_at = now()->setTimezone('Asia/Manila');
        $areaofAssignment->updated_at = null;
    
        $areaofAssignment->save();

        return response()->json(['message' => 'Area of assignment main saved successfully'], 200);
    }


    public function updateAreaOfAssignment(Request $request) {

        $request->validate([
            'id' => 'required|integer',
            'AreaAssignmentMain' => 'required|string|max:255',
        ]);
    
        $areaOfAssignment = areaofassignment::find($request->input('id'));
        $areaOfAssignment->AreaAssignmentMain = $request->input('AreaAssignmentMain');
        $areaOfAssignment->updated_at = now()->setTimezone('Asia/Manila');
        $areaOfAssignment->save();
    
        return response()->json(['message' => 'Area of Assignment updated successfully'], 200);
    }


    public function deleteAreaOfAssignment($id) {
        $areaOfAssignment = areaofassignment::find($id);
    
        if ($areaOfAssignment) {
            $areaOfAssignment->delete();
            return response()->json(['message' => 'Area of Assignment deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'Area of Assignment not found'], 404);
        }
    }
    
    public function areaofassignmentsub(Request $request)
    {
        $areaofAssignments = areaofassignmentsub::orderBy('created_at', 'desc')->get();
        $areaofAssignmentMain = areaofassignment::orderBy('created_at', 'desc')->get();
    
        return view('Trainers.areaofassignmentsub', compact('areaofAssignmentMain', 'areaofAssignments'));
    }
    

    public function saveAreaOfAssignmentSub(Request $request) {
        
        $request->validate([
            'AreaOfAssignmentId' => 'required|int|exists:areaofassignments,id', 
            'AreaAssignmentSub' => 'required|string|max:255'
        ]);

        $areaofAssignmentSub = new areaofassignmentsub();
        $areaofAssignmentSub->AreaOfAssignmentId = $request->input('AreaOfAssignmentId');
        $areaofAssignmentSub->AreaAssignmentSub = $request->input('AreaAssignmentSub');
        $areaofAssignmentSub->created_at = now()->setTimezone('Asia/Manila');
        $areaofAssignmentSub->updated_at = null;

        $areaofAssignmentSub->save();

        return response()->json(['message' => 'Area of assignment sub saved successfully'], 200);
    }


    public function updateAreaOfAssignmentSub(Request $request) {
        $request->validate([
            'id' => 'required|int|exists:areaofassignmentsubs,id',
            'AreaAssignmentMain' => 'required|int|exists:areaofassignments,id',
            'AreaAssignmentSub' => 'required|string|max:255'
        ]);
    
        $areaOfAssignment = areaofassignmentsub::find($request->input('id'));
        if ($areaOfAssignment) {
            $areaOfAssignment->AreaOfAssignmentId = $request->input('AreaAssignmentMain');
            $areaOfAssignment->AreaAssignmentSub = $request->input('AreaAssignmentSub');
            $areaOfAssignment->updated_at = now()->setTimezone('Asia/Manila');
            $areaOfAssignment->save();
            
            return response()->json(['message' => 'Area of Assignment updated successfully'], 200);
        } else {
            return response()->json(['message' => 'Record not found'], 404);
        }
    }
    

    public function getAreaOfAssignment($id) {
        // Fetch the area of assignment from the database
        $areaOfAssignment = areaofassignmentsub::find($id);
    
        // Check if the data was found
        if ($areaOfAssignment) {
            return response()->json([
                'id' => $areaOfAssignment->id,
                'AreaOfAssignmentId' => $areaOfAssignment->AreaOfAssignmentId,
                'AreaAssignmentSub' => $areaOfAssignment->AreaAssignmentSub
            ]);
        } else {
            return response()->json(['message' => 'Data not found'], 404);
        }
    }


    
    public function deleteAreaOfAssignmentSub($id) {
        $areaOfAssignmentSub = areaofassignmentsub::find($id);
    
        if ($areaOfAssignmentSub) {
            $areaOfAssignmentSub->delete();
            return response()->json(['message' => 'Area of Assignment sub deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'Area of Assignment sub not found'], 404);
        }
    }
}
