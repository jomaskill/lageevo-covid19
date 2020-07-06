<?php

namespace App\Http\Controllers;

use App\sample;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SampleController extends Controller
{

    public function index()
    {
        return $this->model()::all();
    }


    public function create()
    {
        //
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

    public function edit(sample $sample)
    {
        //
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
        return sample::class;
    }

    protected function rulesStore()
    {
        return [
            'email' => 'required',
            'sample_date' => 'required|date_format:Y-m-d',
            'gal_requisition' => 'nullabel',
            'name' => 'required|string|max:255',
            'age' => 'required|numeric|min:0|max:150',
            'sex' => 'required',
            'birth_date' => 'required|date_format:Y-m-d',
            'city' => 'required|string|max:255',
            'residential_city' => 'required|string|max:255',
            'beginning_symptom_date' => 'required|in:echo implode(','.sample::BEGINNING_SYMPTON_DATE)',
            'collection_sample_date' => 'required|date_format:Y-m-d',
            'patient_status' => 'required|in:echo implode(','.sample::PATIENT_STATUS)',
            'collect_method' => 'required|in:echo implode(','.sample::COLLECT_METHOD)',
        ];
    }

    protected function rulesUpdate()
    {
        return [
            'sample_date' => 'sometimes|date_format:Y-m-d',
            'gal_requisition' => 'sometimes',
            'name' => 'sometimes|string|max:255',
            'age' => 'sometimes|numeric|min:0|max:150',
            'sex' => 'sometimes',
            'birth_date' => 'sometimes|date_format:Y-m-d',
            'city' => 'sometimes|string|max:255',
            'residential_city' => 'sometimes|string|max:255',
            'beginning_symptom_date' => 'sometimes',
            'collection_sample_date' => 'sometimes|date_format:Y-m-d',
            'patient_status' => 'sometimes',
            'collect_method' => 'sometimes',
        ];
    }

    protected function findOrFail($id)
    {
        $model = $this->model();
        $keyName = (new $model)->getRouteKeyName();

        return $this->model()::where($keyName, $id)->firstOrFail();
    }
}
