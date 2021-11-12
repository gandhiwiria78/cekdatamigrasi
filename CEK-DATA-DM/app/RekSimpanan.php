<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekSimpanan extends Model
{
    //
    protected $table = 'rekening.simpanan';
    protected $fillable = [
        "rekening.simpanan",
        "norek",
        "cif",
        "saldo" ,
        "kodecabang",
        "produk",
    ];
}
