<?php

namespace App\Http\Controllers;

use App\Imports\mutasiSimpananimport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MutasiSimpananController extends Controller
{
    //
    public function Show()
    {
        # code...
        return view("jalinan/index");
    }

    public function LaporanJalinan()
    {
        # code...
        return view("jalinan/laporan");
    }
    
    
    public function Store(Request $request)
    {
        # code...
        $mutasi = $request->file("mutasijalinan")->store('temp');
        //dd($mastercif);
        Excel::import(new mutasiSimpananimport, $mutasi);
        //return redirect('/')->with('success', 'All good!');
        return back()->withStatus('Selesai import');
    }

    //
}
