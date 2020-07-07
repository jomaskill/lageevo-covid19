<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pcr extends Model
{
    use SoftDeletes;

    protected $fillabel = [
        'thermocycler',
        'N1',
        'N2',
        'RP',
    ];
}
