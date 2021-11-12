<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CIF extends Model
{
    //
    protected $table = 'cif';
    protected $fillable = [
        "nocifalt",
        "kodecabang",
        "jenisidentitas",
        "namanasabah",
        "jenisnasabah",
        "perorangan_noktp",
        "perorangan_tempatlahir",
        "perorangan_tgllahir",
        "perorangan_jeniskelamin",
        "perorangan_agama",
        "dataalamat_rumah_alamat1",
        "dataalamat_rumah_kelurahan",
        "dataalamat_ktp_rt",
        "dataalamat_ktp_rw",
        "dataalamat_ktp_kecamatan",
        "dataalamat_ktp_kelurahan",
        "dataalamat_ktp_kota",
        "dataalamat_ktp_propinsi",
        "dataalamat_rumah_notelp",
        "tglbukacif"
    ];

}
