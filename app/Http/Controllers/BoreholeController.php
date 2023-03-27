<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBoreholeRequest;
use App\Http\Requests\UpdateBoreholeRequest;
use App\Models\Borehole;

class BoreholeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreBoreholeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBoreholeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Borehole  $borehole
     * @return \Illuminate\Http\Response
     */
    public function show(Borehole $borehole)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Borehole  $borehole
     * @return \Illuminate\Http\Response
     */
    public function edit(Borehole $borehole)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBoreholeRequest  $request
     * @param  \App\Models\Borehole  $borehole
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBoreholeRequest $request, Borehole $borehole)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Borehole  $borehole
     * @return \Illuminate\Http\Response
     */
    public function destroy(Borehole $borehole)
    {
        //
    }
}
