<?php

namespace App\Http\Controllers;

use App\Sample;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class SampleController extends Controller
{

    public function index()
    {
        return view('sampleShow', Sample::all());
    }


    public function create()
    {
        return view('sampleCreate');
    }


    public function store(Request $request)
    {
        $validatedData = $this->validate($request, $this->rulesStore());
        return $this->model()::create($validatedData);
    }

    public function show($id)
    {
        return $this->findOrFail($id);
    }

    public function edit(Sample $sample)
    {
        return view('sampleCreate', $sample);
    }

    public function update(Request $request, $id)
    {
        //return $request;

        $validatedData = $this->validate($request, $this->rulesUpdate());

        $dataToBeUpdated = $this->findOrFail($id);

        $dataToBeUpdated->update($validatedData);

        return $dataToBeUpdated;
    }

    public function destroy($id)
    {
        $dataToBeDeleted = $this->findOrFail($id);
        $dataToBeDeleted->delete();

        return response()->noContent();
    }

    protected function model()
    {
        return Sample::class;
    }

    protected function rulesStore()
    {
        return [
            'email' => 'required|email',
            'sample_date' => 'required|date_format:Y-m-d',
            'gal_requisition' => 'nullable',
            'name' => 'required|string|max:255',
            'age' => 'required|numeric|between:0,150',
            'sex' => 'required|in:'.$sex = implode(",",Sample::SEX),
            'birth_date' => 'required|date_format:Y-m-d',
            'city' => 'required|string|max:255',
            'residential_city' => 'required|string|max:255',
            'beginning_symptom_date' => 'required|in:'.implode(",",Sample::BEGINNING_SYMPTOM_DATE),
            'collection_sample_date' => 'required|date_format:Y-m-d',
            'patient_status' => 'required|in:'.implode(",", Sample::PATIENT_STATUS),
            'collect_method' => 'required|in:'.implode(",",Sample::COLLECT_METHOD),
            'user_id' => 'required|exists:users,id',
            'confirmation' =>  'required|boolean'
        ];
    }

    protected function rulesUpdate()
    {
        return array(
            'sample_date' => 'sometimes|date_format:Y-m-d',
            'gal_requisition' => 'sometimes',
            'name' => 'sometimes|string|max:255',
            'age' => 'sometimes|numeric|between:0,150',
            'sex' => 'sometimes|in:'.$sex = implode(",",Sample::SEX),
            'birth_date' => 'sometimes|date_format:Y-m-d',
            'city' => 'sometimes|string|max:255',
            'residential_city' => 'sometimes|string|max:255',
            'beginning_symptom_date' => 'sometimes|in:'.$beginning_symptom_date = implode(",",Sample::BEGINNING_SYMPTOM_DATE),
            'collection_sample_date' => 'sometimes|date_format:Y-m-d',
            'patient_status' => 'sometimes|in:'.$string = implode(",", Sample::PATIENT_STATUS),
            'collect_method' => 'sometimes|in:'.$collect_method = implode(",",Sample::COLLECT_METHOD),
            'user_id' => 'sometimes|exists:users,id',
            'confirmation' => 'sometimes|boolean',
        );
    }

    protected function findOrFail($id)
    {
        $model = $this->model();
        $keyName = (new $model)->getRouteKeyName();

        return $this->model()::where($keyName, $id)->firstOrFail();
    }

}
