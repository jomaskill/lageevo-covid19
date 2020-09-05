<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sample extends Model
{
    use SoftDeletes;

    const BEGINNING_SYMPTOM_DATE = ['ate_3','4_a_6','7_a_9','10+','assintomatico'];
    const PATIENT_STATUS = ['liberado','hospitalizado','obito'];
    const COLLECT_METHOD = ['swab_nasofaringe','swab_orofaringe','lavado_broncoalveolar','saliva','aspirado_traqueal','post_mortem'];
    const SEX = ['M', 'F', 'T'];

    protected $guarded = [];

    public function secetary()
    {
        return $this->belongsTo(Secretary::class);
    }

    public function LabSample()
    {
        return $this->hasOne(LabSample::class);
    }
}


