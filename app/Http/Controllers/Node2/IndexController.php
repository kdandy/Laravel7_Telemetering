<?php

namespace App\Http\Controllers\Node2;

use App\Http\Controllers\Controller;
use App\Models\Node2;
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
        $node2 = Node2::orderBy('id','desc')->limit(50)->get();
        return view("pages.node2.index", compact('node2'));
    }

    public function cetak_pdf()
    {
        $cetak_sensor = Node2::all();
        $pdf = PDF::loadview('pages.node2.cetak_pdf',['Node2'=>$cetak_sensor]);
        return $pdf->download('report-node2.pdf');
    }
}