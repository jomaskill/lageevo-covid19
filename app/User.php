<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    const TYPES = ['admin' => 1, 'employee' => 2, 'secretary' => 3];

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['deleted_at'];


    public function samples()
    {
        return $this->hasMany(Sample::class);
    }

    public function userType()
    {
        $this->belongsTo(UserType::class);
    }

}
