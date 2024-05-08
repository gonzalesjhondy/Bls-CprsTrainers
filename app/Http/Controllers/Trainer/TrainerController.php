<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Muncity;
use App\Models\Province;
use Illuminate\Support\Facades\DB;

class TrainerController extends Controller
{
    //
    public function index(Request $request){

        // // Retrieve data from the 'muncity' table in the 'maifex' database
        // $muncities = DB::connection('maif')->table('muncity')->get();
        
        // // Retrieve data from the 'province' table in the 'maifex' database
        // $provinces = DB::connection('maif')->table('province')->get();

        // Output the retrieved data (for testing purposes)
        //dd($muncities, $provinces);

        // $muncities = Muncity::on('maif')->get();

        // $muncityArray = $muncities->toArray();

        $provinces = Province::on('maif')->get();

        $selectedProvinceId = $request->input('id');

        if($selectedProvinceId){
            $muncities = Muncity::on('maif')->where('province_id', $selectedProvinceId)->get();
        }else{
            $muncities = Muncity::on('maif')->where('province_id', $selectedProvinceId)->get();
        }
 
        return view('Trainers.index', compact('provinces','selectedProvinceId','muncities'));
    }

    // public function muncity(Request $request) {

    //     $provinces = Province::on('maif')->get();

    //     $selectedProvinceId = $request->input('id');

    //     if($selectedProvinceId){
    //         $muncities = Muncity::on('maif')->where('province_id', $selectedProvinceId)->get();
    //     }else{
    //         $muncities = Muncity::on('maif')->where('province_id', $selectedProvinceId)->get();
    //     }
    //     return response()->json([
    //         'id' => $selectedProvinceId
    //     ]);
    // }
}
