<?php

namespace App\Http\Controllers\Tele2History;

use App\Http\Controllers\Controller;
use App\Models\Tele2History;
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
        $tele2 = Tele2History::orderBy('id','desc')->limit(50)->get();
        return view("pages.tele2history.index", compact('tele2'));
    }

    public function cetak_pdf()
    {
        $cetak_sensor = Tele2History::all();
        $pdf = PDF::loadview('pages.tele2history.cetak_pdf',['Tele2History'=>$cetak_sensor]);
        return $pdf->download('report-tele2-history.pdf');
    }
}