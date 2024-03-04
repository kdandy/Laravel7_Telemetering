<?php

namespace App\Http\Controllers\Visual1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view("pages.visual1.index");
    }
}
