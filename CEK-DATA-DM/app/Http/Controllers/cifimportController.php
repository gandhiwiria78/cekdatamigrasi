<?php

namespace App\Http\Controllers;

use App\Imports\SheetCifimport;
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
        $mastercif = $request->file("mastercif");
        //dd($mastercif);
        Excel::import(new SheetCifimport, $mastercif);
        
        //return redirect('/')->with('success', 'All good!');
        return back()->withStatus('Selesai import');
    }


}

