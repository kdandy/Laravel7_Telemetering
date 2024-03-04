<?php

namespace App\Http\Controllers\Visual2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view("pages.visual2.index");
    }
}
