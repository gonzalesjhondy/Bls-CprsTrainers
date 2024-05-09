<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class LoginCtrl extends Controller
{
    // use AuthenticatesUsers;
    //

    public function LoginForm(){

        // $dtruserid = DB::connection('dohdtr')->table('users')->pluck('userid');
        // $dts = DB::connection('dts')->table('users')->get();


        // $joinedUsers = DB::connection('dohdtrex')
        // ->table('users')
        // ->join('dtsex.users', 'dohdtrex.users.userid', '=', 'dtsex.users.username')
        // ->join('dtsex.division', 'dtsex.users.division_id', '=', 'dtsex.division.id')
        // ->join('dtsex.section', 'dtsex.users.section_id', '=', 'dtsex.section.id')
        // ->select(
        //     'dohdtrex.users.*',
        //     'dtsex.users.*',
        //     'dtsex.division.*',
        //     'dtsex.section.*'
        // )
        // ->get();


        // $dtsdtr = DB::connection('dohdtr')
        //           ->table('users')
        //           ->join('dts.users', 'dohdtr.users.userid', '=', 'dts.users.username')
        //           ->join('dts.division', 'dts.division.id', '=', 'dts.users.division')
        //           ->join('dts.section', 'dts.section')

        return view('auth.login');
    }

    public function Login(Request $request) {
        // Retrieve credentials from the request
    // $credentials = $request->only('username', 'password');
    // // Attempt to authenticate the user against the "dohdtr" connection
    // if (auth()->guard('dohdtr')->attempt($credentials)) {
    //     // Authentication successful, redirect to the dashboard
    //     return redirect()->route('trainer.index');
    // }

    // // Authentication failed, redirect back with error
    // return redirect()->back()->with('error', 'Invalid credentials');

     }
}
