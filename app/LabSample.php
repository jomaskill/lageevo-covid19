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
        'status'
    ];
}
