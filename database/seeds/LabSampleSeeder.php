<?php

use App\LabSample;
use Illuminate\Database\Seeder;

class LabSampleSeeder extends Seeder
{
    
    public function run()
    {
        factory(LabSample::class)->create();
    }
}
