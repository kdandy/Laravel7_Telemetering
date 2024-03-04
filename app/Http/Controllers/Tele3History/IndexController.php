<?php

namespace App\Http\Controllers\Tele3History;

use App\Http\Controllers\Controller;
use App\Models\Tele3History;
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
        $tele3 = Tele3History::orderBy('id','desc')->limit(50)->get();
        return view("pages.tele3history.index", compact('tele3'));
    }

    public function cetak_pdf()
    {
        $cetak_sensor = Tele3History::all();
        $pdf = PDF::loadview('pages.tele3history.cetak_pdf',['Tele3History'=>$cetak_sensor]);
        return $pdf->download('report-tele3-history.pdf');
    }
}