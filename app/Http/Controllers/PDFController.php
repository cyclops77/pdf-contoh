<?php

namespace App\Http\Controllers;

use PDF;
use App\Pegawai;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();
 
        $pdf = PDF::loadview('welcome',['pegawai'=>$pegawai]);
        return $pdf->download('laporan-pegawai.pdf');
    }
}
