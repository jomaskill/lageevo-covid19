<?php

namespace App\Http\Controllers;

use App\LabSample;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ExtractionController extends Controller
{
    public function index($itemsPerPage){
        
        return LabSample::where('status','extraction')->paginate($itemsPerPage);
    }
}