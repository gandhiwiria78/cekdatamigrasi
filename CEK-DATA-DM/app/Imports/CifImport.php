<?php

namespace App\Imports;

use App\CIF;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class CifImport implements WithHeadingRow, ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function collection(Collection $rows)
    {
       // dd($rows);
        foreach ($rows as $row) 
        {
            CIF::create([
                "nocifalt" => $row['nocifalt'],
                "kodecabang"=>$row['kodecabang'],
                "jenisidentitas"=>$row['jenisidentitas'],
                "namanasabah"=>$row['namanasabah'],
                "jenisnasabah"=>$row['jenisnasabah'],
                "perorangan_noktp"=>$row['perorangan_noktp'],
                "perorangan_tempatlahir"=>$row['perorangan_tempatlahir'],
                "perorangan_tgllahir"=>\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['perorangan_tgllahir']),
                "perorangan_jeniskelamin"=>$row['perorangan_jeniskelamin'],
                "perorangan_agama"=>$row['perorangan_agama'],
                "dataalamat_rumah_alamat1"=>$row['dataalamat_rumah_alamat1'],
                "dataalamat_rumah_kelurahan"=>$row['dataalamat_rumah_kelurahan'],
                "dataalamat_ktp_rt"=>$row['dataalamat_ktp_rt'],
                "dataalamat_ktp_rw"=>$row['dataalamat_ktp_rw'],
                "dataalamat_ktp_kecamatan"=>$row['dataalamat_ktp_kecamatan'],
                "dataalamat_ktp_kelurahan"=>$row['dataalamat_ktp_kelurahan'],
                "dataalamat_ktp_kota"=>$row['dataalamat_ktp_kota'],
                "dataalamat_ktp_propinsi "=>$row['dataalamat_ktp_propinsi'],
                "dataalamat_rumah_notelp"=>$row['dataalamat_rumah_notelp'],
                "tglbukacif"=>\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['tglbukacif']),
            ]);
            
        }
       // dd($row);
    }
    
    public function chunkSize(): int
    {
        return 1000;
    }

    
}
