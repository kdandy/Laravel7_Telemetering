<?php

namespace App\Http\Controllers\Tele1History;

use App\Http\Controllers\Controller;
use App\Models\Tele1History;
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
        $tele1 = Tele1History::orderBy('id','desc')->limit(50)->get();
        return view("pages.tele1history.index", compact('tele1'));
    }

    public function cetak_pdf()
    {
        $cetak_sensor = Tele1History::all();
        $pdf = PDF::loadview('pages.tele1history.cetak_pdf',['Tele1History'=>$cetak_sensor]);
        return $pdf->download('report-tele1-history.pdf');
    }
}