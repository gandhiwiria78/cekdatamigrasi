<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class status_TP extends Model
{
    //
    protected $table = 'status_tp';
    protected $fillable = [
        'TP',
        'Status'
    ];
}
