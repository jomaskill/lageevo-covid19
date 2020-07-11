<?php

use App\Pcr;
use Illuminate\Database\Seeder;

class PcrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Pcr::class)->create();
    }
}
