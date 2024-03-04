<?php

namespace App\Http\Controllers\Node3;

use App\Http\Controllers\Controller;
use App\Models\Node3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use PDF;

class IndexController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $node3 = Node3::orderBy('id','desc')->limit(50)->get();
        return view("pages.node3.index", compact('node3'));
    }

    public function cetak_pdf()
    {
        $cetak_sensor = Node3::all();
        $pdf = PDF::loadview('pages.node3.cetak_pdf',['Node3'=>$cetak_sensor]);
        return $pdf->download('report-node3.pdf');
    }
}