<?php

namespace App\Http\Controllers;

use App\LabSample;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ExtractionController extends Controller
{
    public function index(){
        
        $samplesToExtract =  LabSample::where('status','extraction')->paginate(36);

        return view('extraction',['samplesToExtract' => $samplesToExtract]);
    }

    public function pcr(Request $request){

        foreach ($request->all() as $s){

            $labSample = LabSample::find($s['id']);
            var_dump($labSample);
            // $labSample->update(['status' => 'pcr']);
        }


    }
}