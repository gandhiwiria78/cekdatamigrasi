<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CIFGagal extends Model
{
    //
    protected $table = 'cif';
    protected $fillable = [
        "nocifalt",
        "keterangan"
    ];
}
