<?php

namespace App\Http\Controllers;

use App\Pcr;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PcrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->model()::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $this->validate($request, $this->rulesStore());
        return $this->model()::create($validatedData);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pcr  $pcr
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pcr  $pcr
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pcr  $pcr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pcr  $pcr
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataToBeDeleted = $this->findOrFail($id);
        $dataToBeDeleted->delete();
        return response()->noContent();
    }

    protected function rulesStore(){
        return[
            'thermocycler' => 'required|in:'.implode(",",Pcr::THERMOCYCLER),
            'N1' => 'required|numeric|between:0,45',
            'N2' => 'required|numeric|between:0,45',
            'RP' => 'required|numeric|between:0,45',
        ];
    }

    protected function rulesUpdate(){
        return[
            'thermocycler' => 'sometimes|in:'.$thermocycler = implode(",",Pcr::THERMOCYCLER),
            'N1' => 'sometimes|numeric|between:0,45',
            'N2' => 'sometimes|numeric|between:0,45',
            'RP' => 'sometimes|numeric|between:0,45',
        ];
    }

    protected function model()
    {
        return Pcr::class;
    }
}
