<?php

use App\User;
use App\UserType;
use Illuminate\Database\Seeder;

class UserTypesSeeder extends Seeder
{

    public function run()
    {
        UserType::insert(array(
            ['name' => 'admin'],
            ['name' => 'employee'],
            ['name' => 'secretary']
        ));
    }
}
