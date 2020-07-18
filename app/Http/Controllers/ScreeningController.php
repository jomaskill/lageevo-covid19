<?php

namespace App\Http\Controllers;

use App\Sample;
use App\LabSample;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ScreeningController extends Controller
{

    public function show($residential_city){

        return Sample::where('residential_city',$residential_city)
        ->where('confirmation', 0)
        ->get();


    }



}