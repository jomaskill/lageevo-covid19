<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class sample extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'email',
        'sample_date',
        'gal_requisition',
        'name',
        'age',
        'sex',
        'birth_date',
        'city',
        'residential_city',
        'beginning_symptom_date',
        'collection_sample_date',
        'patient_status',
        'collect_method',
        'user_id'
    ];
}


