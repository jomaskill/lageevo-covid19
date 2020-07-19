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
        'sample_id',
    ];

    const STATUS = ['extraction', 'pcr', 'analises', 'report'];

    protected $dates = ['deleted_at'];

    public function sample()
    {
        return $this->belongsTo(Sample::class);
    }

    public function Pcr()
    {
        return $this->hasOne(Pcr::class);
    }
}
