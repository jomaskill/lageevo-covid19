<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Secretary extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
