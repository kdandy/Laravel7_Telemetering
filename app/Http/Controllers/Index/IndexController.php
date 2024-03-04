<?php

namespace App\Http\Controllers\Index;

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
        $username = $request->session()->get('username');
        $user = User::Count();
        $data = ['user'=>$user, 'username'=>$username];
        return view('pages.admin.index')->with('data', $data);
        dd($data);
    }
}
