<?php

namespace App\Imports;
use App\MutasiSimpanan;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToCollection;
use Carbon\Carbon;

class mutasiSimpananimport implements WithHeadingRow, ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        //dd($collection);
        foreach ($collection as $row) 
        {   

            //dd($row['tgljurnal']);
            $tanggalJurnal=Carbon::parse($row['tgljurnal'])->format('Y-m-d H:i:s');
            $tgljamdibuat=Carbon::parse($row['tgljamdibuat'])->format('Y-m-d H:i:s');
            MutasiSimpanan::create([
                'nojurnal' => $row['nojurnal'],
                'tgljurnal' => $tanggalJurnal,
                'jenis' => $row['jenis'],
                'norekening' => $row['norekening'],
                'nama_nasabah' => $row['nama'],
                'nama_rekening' => $row['nama_rekening'],
                'kodeproduk' => $row['kodeproduk'],
                'keterangan' => $row['keterangan'],
                'debit' => $row['debit'],
                'kredit' => $row['kredit'],
                'tgljamdibuat'=>$tgljamdibuat
            ]);
            
            
        }
    }
}
