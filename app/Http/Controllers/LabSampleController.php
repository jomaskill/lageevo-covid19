<?php

namespace App\Http\Controllers;

use App\LabSample;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class LabSampleController extends Controller
{

    public function index()
    {
        return $this->model()::all();
    }


    public function create()
    {
        ////Essa é a rota de Samples
    }


    public function store($data)
    {
        $validatedData = Validator::make($data, $this->rulesStore())->validate();
        return $this->model()::create($validatedData);
    }


    public function show($id)
    {
        return $this->findOrFail($id);
    }


    public function edit(LabSample $labSample)
    {
        //
    }

    protected function findOrFail($id)
    {
        $model = $this->model();
        $keyName = (new $model)->getRouteKeyName();

        return $this->model()::where($keyName, $id)->firstOrFail();
    }


    public function update(Request $request, $id)
    {

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

    protected function rulesStore()
    {
        return [
            'name' => 'required|string',
            'birth_date' => 'required|date_format:Y-m-d',
            'city' => 'required|string',
            'observations' => 'required|string',
            'status' => 'sometimes|in:'.implode(",",LabSample::STATUS),
            'sample_id' => 'required|exists:samples,id'

        ];
    }

    protected function rulesUpdate()
    {
        return [
            'status' => 'sometimes|in:'.implode(",",LabSample::STATUS),
        ];
    }

    protected function model()
    {
        return LabSample::class;
    }
}
