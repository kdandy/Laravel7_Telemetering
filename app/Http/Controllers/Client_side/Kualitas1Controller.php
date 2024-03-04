<?php

namespace App\Http\Controllers\Client_side;

use App\Http\Controllers\Controller;
use App\Models\Node1;
use Illuminate\Http\Request;

class Kualitas1Controller extends Controller
{
    public function index()
    {
        $node1 = Node1::orderBy('id','desc')->limit(1)->get();
        return view("client_pages.Templating.kualitas1", compact('node1'));
    }
}
