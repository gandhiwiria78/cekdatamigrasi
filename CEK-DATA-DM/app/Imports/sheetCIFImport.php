<?php

namespace App\Imports;

use App\CIF;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class sheetCIFImport implements WithMultipleSheets{
    public function sheets(): array
    {
        return [
            0=> new CifImport()
        ];
    }
}

class CifImport implements ToCollection ,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null

    */
    

    // public function collection(Collection $rows)
    // {
        
        
    //     foreach ($rows as $key=>$row) 
    //     {
    //         if ($key == 0){
    //             continue;
    //         } 
    //         Log::debug('Showing the user profile for user: '.$key .'='.count($rows));
    //         or whatever
    //         dd($row[0]);
            
    //         $nocifalt = $row[0];
    //         $kodecabang = $row[1];
    //         $jenisidentitas = $row[2];
    //         $namanasabah = $row[3];
    //         $jenisnasabah = $row[4];
    //         $perorangan_noktp = $row[5];
    //         $perorangan_tempatlahir = $row[6];
    //         $perorangan_tgllahir = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[7]);
    //         $perorangan_jeniskelamin = $row[8];
    //         $perorangan_agama = $row[9];
    //         $dataalamat_rumah_alamat1 = $row[10];
    //         $dataalamat_rumah_kelurahan = $row[11];
    //         $dataalamat_ktp_rt = $row[12];
    //         $dataalamat_ktp_rw = $row[13];
    //         $dataalamat_ktp_kecamatan = $row[14];
    //         $dataalamat_ktp_kelurahan = $row[15];
    //         $dataalamat_ktp_kota = $row[16];
    //         $dataalamat_ktp_propinsi = $row[17];
    //         $dataalamat_rumah_notelp = $row[18];
    //         $tglbukacif = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[19]);

    //         CIF::create([
    //             "nocifalt"=>$nocifalt,
    //             "kodecabang"=>$kodecabang,
    //             "jenisidentitas"=>$jenisidentitas,
    //             "namanasabah"=>$namanasabah,
    //             "jenisnasabah"=>$jenisnasabah,
    //             "perorangan_noktp"=>$perorangan_noktp,
    //             "perorangan_tempatlahir"=>$perorangan_tempatlahir,
    //             "perorangan_tgllahir"=>$perorangan_tgllahir,
    //             "perorangan_jeniskelamin"=>$perorangan_jeniskelamin,
    //             "perorangan_agama"=>$perorangan_agama,
    //             "dataalamat_rumah_alamat1"=>$dataalamat_rumah_alamat1,
    //             "dataalamat_rumah_kelurahan"=>$dataalamat_rumah_kelurahan,
    //             "dataalamat_ktp_rt"=>$dataalamat_ktp_rt,
    //             "dataalamat_ktp_rw"=>$dataalamat_ktp_rw,
    //             "dataalamat_ktp_kecamatan"=>$dataalamat_ktp_kecamatan,
    //             "dataalamat_ktp_kelurahan"=>$dataalamat_ktp_kelurahan,
    //             "dataalamat_ktp_kota"=>$dataalamat_ktp_kota,
    //             "dataalamat_ktp_propinsi"=>$dataalamat_ktp_propinsi,
    //             "dataalamat_rumah_notelp"=>$dataalamat_rumah_notelp,
    //             "tglbukacif"=>$tglbukacif
    //         ]);

          
    //     }
    // }
        
    

    public function collection(Collection $rows)
    { 
       foreach($rows as $row){
            $nocifalt = $row["nocifalt"];
            $kodecabang = $row["kodecabang"];
            $jenisidentitas = $row["jenisidentitas"];
            $namanasabah = $row["namanasabah"];
            $jenisnasabah = $row["jenisnasabah"];
            $perorangan_noktp = $row["perorangan_noktp"];
            $perorangan_tempatlahir = $row["perorangan_tempatlahir"];
            $perorangan_tgllahir = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row["perorangan_tgllahir"]);
            $perorangan_jeniskelamin = $row["perorangan_jeniskelamin"];
            $perorangan_agama = $row["perorangan_agama"];
            $dataalamat_rumah_alamat1 = $row["dataalamat_rumah_alamat1"];
            $dataalamat_rumah_kelurahan = $row["dataalamat_rumah_kelurahan"];
            $dataalamat_ktp_rt = $row["dataalamat_ktp_rt"];
            $dataalamat_ktp_rw = $row["dataalamat_ktp_rw"];
            $dataalamat_ktp_kecamatan = $row["dataalamat_ktp_kecamatan"];
            $dataalamat_ktp_kelurahan = $row["dataalamat_ktp_kelurahan"];
            $dataalamat_ktp_kota = $row["dataalamat_ktp_kota"];
            $dataalamat_ktp_propinsi = $row["dataalamat_ktp_propinsi"];
            $dataalamat_rumah_notelp = $row["dataalamat_rumah_notelp"];
            $tglbukacif = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row["tglbukacif"]);

            CIF::create([
                "nocifalt"=>$nocifalt,
                "kodecabang"=>$kodecabang,
                "jenisidentitas"=>$jenisidentitas,
                "namanasabah"=>$namanasabah,
                "jenisnasabah"=>$jenisnasabah,
                "perorangan_noktp"=>$perorangan_noktp,
                "perorangan_tempatlahir"=>$perorangan_tempatlahir,
                "perorangan_tgllahir"=>$perorangan_tgllahir,
                "perorangan_jeniskelamin"=>$perorangan_jeniskelamin,
                "perorangan_agama"=>$perorangan_agama,
                "dataalamat_rumah_alamat1"=>$dataalamat_rumah_alamat1,
                "dataalamat_rumah_kelurahan"=>$dataalamat_rumah_kelurahan,
                "dataalamat_ktp_rt"=>$dataalamat_ktp_rt,
                "dataalamat_ktp_rw"=>$dataalamat_ktp_rw,
                "dataalamat_ktp_kecamatan"=>$dataalamat_ktp_kecamatan,
                "dataalamat_ktp_kelurahan"=>$dataalamat_ktp_kelurahan,
                "dataalamat_ktp_kota"=>$dataalamat_ktp_kota,
                "dataalamat_ktp_propinsi"=>$dataalamat_ktp_propinsi,
                "dataalamat_rumah_notelp"=>$dataalamat_rumah_notelp,
                "tglbukacif"=>$tglbukacif
            ]); 
        }
       
    }

    public function chunkSize(): int
    {
        return 3000;
    }

    public function batchSize(): int
    {
        return 3000;
    }

    
}
