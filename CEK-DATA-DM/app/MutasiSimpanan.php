<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MutasiSimpanan extends Model
{
    //
    protected $table = 'mutasiSimpanan';
    protected $fillable = [
        'nojurnal' ,
        'tgljurnal' ,
        'jenis' ,
        'norekening' ,
        'nama_nasabah' ,
        'nama_rekening' ,
        'kodeproduk' ,
        'keterangan' ,
        'debit' ,
        'kredit' ,
        'tgljamdibuat',
    ];

    
}
