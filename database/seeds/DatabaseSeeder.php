<?php

use App\User;

use App\Pcr;

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

        $this->call(PcrSeeder::class);

        $this->call(SampleSeeder::class);

    }
}
