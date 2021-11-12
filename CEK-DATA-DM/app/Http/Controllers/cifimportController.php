<?php

namespace App\Http\Controllers;

use App\Imports\CifImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class cifimportController extends Controller
{
    //
    public function Show()
    {
        # code...
        return view("mastercif");
    }
    
    public function Store(Request $request)
    {
        # code...
        $mastercif = $request->file("mastercif")->store('temp');
        //dd($mastercif);
        Excel::import(new CifImport, $mastercif);
        
        //return redirect('/')->with('success', 'All good!');
        return back()->withStatus('Selesai import');
    }


}

