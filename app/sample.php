<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class sample extends Model
{
    use SoftDeletes;

    const BEGINNING_SYMPTON_DATE = ['ate_3','4_a_6','7_a_9','10','10+','assintomatico'];
    const PATIENT_STATUS = ['liberado','hospitalizado','obito'];
    const COLLECT_METHOD = ['swab_nasofaringe','swab_orofaringe','lavado_bronmcoalveolar','saliva','aspirado_traqueal','post_mortem'];

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


