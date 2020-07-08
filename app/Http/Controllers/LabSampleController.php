<?php

namespace App\Http\Controllers;

use App\LabSample;
use Illuminate\Http\Request;

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

    
    public function store(Request $request)
    {
        $validatedData = $this->validate($request, $this->rulesStore());
        return $this->model()::create($validatedData);
    }

   
    public function show(LabSample $labSample)
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
        // if($request['password']){
        //     $request['password'] = bcrypt($request['password']);
        // }
        //nao tenho certeza se a rota irá passar a senha do usuario para esse controller

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
            'status' => 'required',
        ];
    }

    protected function rulesUpdate()
    {
        return [
            'name' => 'sometimes|string',
            'birth_date' => 'sometimes|date_format:Y-m-d',
            'city' => 'sometimes|string',
            'observations' => 'sometimes|string',
            'status' => 'sometimes',
        ];
    }

    protected function model()
    {
        return LabSample::class;
    }
}
