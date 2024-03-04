<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class IndexController extends Controller
{

    public function __construct()
    {
        
    }

    public function index(Request $request)
    {
        return view('pages.login.login');
    }

    public function submit(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        // dd($email . ' ' . $password);
        $user = User::where('username' , $username)->where('password' , $password)->first();
        if($user != null)
        {
            $request->session()->put('uid',$user->id);
            $request->session()->put('name',$user->user_name);
            
            return redirect('admin');
        }
        else
        {
            $request->session()->forget('uid');
            return redirect('/login');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('uid');
        return redirect('/login');
    }
}
