<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Muncity;
use App\Models\Province;
use Illuminate\Support\Facades\DB;
use App\Models\Trainer;

class TrainerController extends Controller
{
    //
    public function index(Request $request){
        $user = session('user');
        $provinces = Province::on('maif')->get();
    
        return view('Trainers.index', compact('provinces'));
    }

    public function muncity(Request $request) {
        $selectedProvinceId = $request->input('id');
        $muncities = [];
        if($selectedProvinceId){
            $muncities = Muncity::on('maif')->where('province_id', $selectedProvinceId)->get();
        }else{
            $muncities = Muncity::on('maif')->where('province_id', $selectedProvinceId)->get();
        }
        return response()->json([
            'muncities' => $muncities,
        ]);
    }

    public function AddTrainer(Request $req){
       $user = session('user');
       $areaAssign = $req->input('AreaAssign');
       $profession = $req->input('profession'); 
       $trainer = new Trainer();

       $trainer->fname = $req->input('fname');
       $trainer->mname = $req->input('mname');
       $trainer->lname = $req->input('lname');
       $trainer->suffix = $req->input('suffix');
       $trainer->email = $req->input('email');
       $trainer->LGU = $req->input('ProvinceId');
       $trainer->muncity = $req->input('municipalityId');
       $trainer->age_bracket = $req->input('ageBracket');
       $trainer->gender = $req->input('gender');

       if($areaAssign == "others" && $profession == "others"){
            $trainer->assignment = $req->input('others_AreaAssign');
            $trainer->profession = $req->input('others_profession');
       }else if($profession == "others" && $areaAssign != "others" ){
            $trainer->profession = $req->input('others_profession');
            $trainer->assignment = $areaAssign;
       }else if($profession != "others" && $areaAssign == "others" ){
            $trainer->assignment = $req->input('others_AreaAssign');
            $trainer->profession = $profession;
       }
       else{
            $trainer->assignment = $areaAssign;
            $trainer->profession = $profession;
       }

       $trainer->contact_number = $req->input('mobilenumber');
       $trainer->created_by = $user->fname;
       $trainer->save();

       return redirect()->route('view.training',['id' =>  $trainer->id]);
    }
}
