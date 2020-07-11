<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LabSample extends Model
{
    use SoftDeletes;


    protected $fillable = [
        'name',
        'birth_date',
        'city',
        'observations',
    ];

    protected $status = ['extraction', 'pcr', 'analises', 'report'];

    protected $dates = ['deleted_at'];
}
