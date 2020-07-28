<?php

namespace App\Http\Controllers;

use App\Sample;
use App\LabSample;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ScreeningController extends Controller
{

    public function index(){
        $data = Sample::whereConfirmation('0')
            ->groupBy('city')
            ->get('city');

        //return view with data
        return $data;
    }

    public function show($city){

        $samples = Sample::where(['city'=> $city, 'confirmation' => 0])
            ->get(['name', 'city', 'birth_date']);

        return view('screening',['samples' => $samples]);
        
    }

    public function createLabSample(Request $request){

        foreach ($request->all() as $s){
            
            $sample = Sample::find($s['id']);
            $data = [];
            $data['name'] = $sample->name;
            $data['birth_date'] = $sample->birth_date;
            $data['city'] = $sample->city;
            $data['observations'] = $s['observations'];
            $data['sample_id'] = $sample->id;
            $data['status'] = 'extraction';
    
            (new LabSampleController)->store($data);
            $sample->update(['confirmation' => 1]);
        }
    }

}