<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\FoundationAuth\AuthenticatesUsers;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider; 

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
        //     'dohdtrex.users.username',
        // 'dohdtrex.users.password',
        // 'dohdtrex.users.fname',
        // 'dohdtrex.users.userid',
        // 'dtsex.users.section',
        // 'dtsex.users.division',
        // 'dohdtrex.users.*',
        // )
        // ->get();
        // $users = DB::connection('dohdtr')
        //         ->table('users')
        //         ->join('dts.users', 'dohdtr.users.userid', '=', 'dts.users.username')
        //         ->join('dts.division', 'dts.division.id', '=', 'dts.users.division')
        //         ->join('dts.section', 'dts.section.id', '=', 'dts.users.section')
        //         ->select(
        //         'dohdtr.users.username',
        //         'dohdtr.users.password',
        //         'dohdtr.users.fname',
        //         'dohdtr.users.userid',
        //         )
        //         ->where('dts.users.division','=','3')->where('dts.users.section', '=','80') //53 - Hems
        //         ->get();
        // return $users;
        return view('auth.login');
    }

    public function Login(Request $request) {

        $passwordInput = trim($request->input('password'));
        $users = DB::connection('dohdtr')
                ->table('users')
                ->join('dts.users', 'dohdtr.users.userid', '=', 'dts.users.username')
                ->join('dts.division', 'dts.division.id', '=', 'dts.users.division')
                ->join('dts.section', 'dts.section.id', '=', 'dts.users.section')
                ->select(
                    'dohdtr.users.username',
                    'dohdtr.users.password',
                    'dohdtr.users.fname',
                    'dohdtr.users.userid',
                    'dts.users.section',
                    'dts.users.division',
                 'dohdtr.users.*',
                // 'dts.users.*',
                // 'dts.division.*',
                // 'dts.section.*'
                )
                ->where('dts.users.division','=','3')->where('dts.users.section', '=','80') //53 - Hems
                ->get();
        // dd($users);
        $foundUser = false;
        foreach($users as $user){
       
            if($request->username === $user->username){
                $foundUser = true;
                if(Hash::check($passwordInput, $user->password)){

                    if($user->division == 3 && $user->section == 80) {
                        Auth::loginUsingId($user->userid);
                        session(['user'=> $user]);
                        return redirect(RouteServiceProvider::HOME);
                    }else{
                        return redirect()->route('unauthorized');
                    }
                } else {
                    return redirect()->route('login')->with('error', 'Invalid username or password');
                }
            }
        }

        if (!$foundUser) {
            return redirect()->route('login')->with('error', 'User not found');
        }
        
    }

    public function Logout(){
        Auth::logout();
        session()->forget('user');
        return redirect()->route('login'); 
    }
}
