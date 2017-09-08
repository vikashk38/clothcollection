<?php

namespace App\Http\Controllers;

use App\User;
use DB;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;

class LoginControllers extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }

    public function postRegistration(Request $request)
    { 
        //$ip = $_SERVER['REMOTE_ADDR'];
        //$hostname = gethostbyaddr($ip);
        echo $hostname."<br/>";
        echo $localIP = getHostByName(getHostName()); die;
        $this->validate($request, [

              'v_name' => 'required|max:50',
              'v_email' => 'required|email|max:40|unique:vendor',
              'v_password' => 'required|min:6|max:40'
        ]);

       $name = $request->v_name;
       $email = $request->v_email;
       $password = bcrypt($request->v_password);

        $result = DB::table('vendor')->insert(
            ['v_name' => $name, 'v_email' => $email, 'v_password' => $password]
        );

        if($result){
             return redirect('register')->with('status', 'Succesfully Registered!');
        }
    }
    public function login(Request $request)
    {
        if(session('v_email')){
            return redirect('dashboard');
        } else {
            return view('login');
        }
    }
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'v_email' => 'required|email|max:40',
            'v_password' => 'required|min:6|max:40',
        ]);

        $email = $request->v_email;
        $password= md5($request->v_password);
        $results = DB::table('vendor')
                    ->where([
                            ['v_email', '=', $email],
                            ['v_password', '=', $password],
                            ['v_status', '=', 1],
                        ])
                    ->get();
        //echo "<PRE>"; print_r($results); die;
        foreach($results as $result)
        {
           if($result){
             session (['v_email' => $request->get( 'v_email' )]);
             return redirect('dashboard')->with('status', 'Succesful Login.');
            }
        }
        return redirect('login')->with('status', 'Email or password is incorrect.');
    }
    public function logout(Request $request)
    {
        session()->flush();
        return redirect('login')->with('status', 'Logout Successfully!');
    }
}