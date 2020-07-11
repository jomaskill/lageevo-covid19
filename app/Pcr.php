<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pcr extends Model
{
    use SoftDeletes;

    const THERMOCYCLER = ['1','2'];

    protected $fillable = [
        'thermocycler',
        'N1',
        'N2',
        'RP',
    ];

    /*
    public function labsample(){
        return $this->belongsTo(LabSample::class);
    }*/
}
