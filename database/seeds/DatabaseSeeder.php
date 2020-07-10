<?php

use App\User;
use App\LabSample;
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
        $this->call(SampleSeeder::class);
=======
        $this->call(LabSampleSeeder::class);
>>>>>>> develop
    }
}
