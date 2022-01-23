<?php

namespace App\Http\Controllers;

use App\CIF;
use App\status_TP;
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

    public function CekCif(){

        //dd(status_TP::get());

        $data = status_TP::all();
        return view("mastercif/cekdata",[
            'listTP'=> $data
        ]);


    }

    public function Cekdata(Request $request){

       //get data anggota cif
       $cifs = CIF::where('kodecabang',$request->pilihTP)->get();
       
       // proses check data
       //dd($request->pilihCek);
       if ( $request->pilihCek ==1){
            $this->cekDoublecif($cifs);
       }elseif($request->pilihCek ==2){
            $this->cekDoublecif($cifs);
            $this->cekKTP($cifs);
       }elseif($request->pilihCek ==3){

       }

       
        $data = status_TP::all();
        return view("mastercif/cekdata",[
            
            'listTP'=> $data
        ]);


    }

    function cekDoublecif($data){
        foreach ($data as $cif ) {
           // dd($cif);
        }
    }

    function cekKTP($data){
        dd('cekdata');
    }

}

