<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryWorkRequest;
use App\Http\Requests\UpdateCategoryWorkRequest;
use App\Models\CategoryWork;

class CategoryWorkController extends Controller
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
     * @param  \App\Http\Requests\StoreCategoryWorkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryWorkRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryWork  $categoryWork
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryWork $categoryWork)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryWork  $categoryWork
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryWork $categoryWork)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryWorkRequest  $request
     * @param  \App\Models\CategoryWork  $categoryWork
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryWorkRequest $request, CategoryWork $categoryWork)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryWork  $categoryWork
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryWork $categoryWork)
    {
        //
    }
}
