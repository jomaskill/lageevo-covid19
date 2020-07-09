<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return $this->model()::with('samples')->get();
    }

    public function create()
    {
        //Essa é a rota do formulário
    }

    public function store(Request $request)
    {
        $password = bcrypt('$request->password');
        $validatedData = $this->validate($request, $this->rulesStore());
        $validatedData['password'] = $password;

        return $this->model()::create($validatedData);
    }

    public function show($id)
    {
        return $this->findOrFail($id);
    }

    public function edit($id)
    {
        //Essa é a rota do formulário
    }

    public function update(Request $request, $id)
    {
        if($request['password']){
            $request['password'] = bcrypt($request['password']);
        }

        $validatedData = $this->validate($request, $this->rulesUpdate());

        $dataToBeUpdated = $this->findOrFail($id);

        $dataToBeUpdated->update($validatedData);

        return $dataToBeUpdated;
    }

    protected function findOrFail($id)
    {
        $model = $this->model();
        $keyName = (new $model)->getRouteKeyName();

        return $this->model()::where($keyName, $id)->firstOrFail();
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
            'email' => 'required|email|unique:users',
            'password' => 'required|between:6,12'
        ];
    }

    protected function rulesUpdate()
    {
        return [
            'name' => 'sometimes|string',
            'password' => 'sometimes|between:6,12'
        ];
    }

    protected function model()
    {
        return User::class;
    }

}
