<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sample extends Model
{
    use SoftDeletes;

    const BEGINNING_SYMPTOM_DATE = ['ate_3','4_a_6','7_a_9','10','10+','assintomatico'];
    const PATIENT_STATUS = ['liberado','hospitalizado','obito'];
    const COLLECT_METHOD = ['swab_nasofaringe','swab_orofaringe','lavado_bronmcoalveolar','saliva','aspirado_traqueal','post_mortem'];
    const SEX = ['M', 'F', 'T'];

    protected $fillable = [
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
        'user_id',
        'confirmation',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function LabSample()
    {
        return $this->hasOne(LabSample::class);
    }
}


