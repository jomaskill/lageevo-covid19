<?php

use App\User;
<<<<<<< HEAD
use App\Pcr;
=======
use App\LabSample;
>>>>>>> develop
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
<<<<<<< HEAD
        $this->call(PcrSeeder::class);
=======

        $this->call(SampleSeeder::class);

>>>>>>> develop
    }
}
