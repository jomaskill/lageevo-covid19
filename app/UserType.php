<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $guarded = [];

    public function users()
    {
        $this->hasMany(User::class);
    }
}
