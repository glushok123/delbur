<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSphereRequest;
use App\Http\Requests\UpdateSphereRequest;
use App\Models\Sphere;

class SphereController extends Controller
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
     * @param  \App\Http\Requests\StoreSphereRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSphereRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sphere  $sphere
     * @return \Illuminate\Http\Response
     */
    public function show(Sphere $sphere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sphere  $sphere
     * @return \Illuminate\Http\Response
     */
    public function edit(Sphere $sphere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSphereRequest  $request
     * @param  \App\Models\Sphere  $sphere
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSphereRequest $request, Sphere $sphere)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sphere  $sphere
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sphere $sphere)
    {
        //
    }
}
