<?php

namespace App\Http\Controllers\Client_side;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index()
    {
        return view("client_pages.Templating.tentangtele");
    }
}
