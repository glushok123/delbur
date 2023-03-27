<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReferralUserRequest;
use App\Http\Requests\UpdateReferralUserRequest;
use App\Models\ReferralUser;

class ReferralUserController extends Controller
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
     * @param  \App\Http\Requests\StoreReferralUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReferralUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReferralUser  $referralUser
     * @return \Illuminate\Http\Response
     */
    public function show(ReferralUser $referralUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReferralUser  $referralUser
     * @return \Illuminate\Http\Response
     */
    public function edit(ReferralUser $referralUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReferralUserRequest  $request
     * @param  \App\Models\ReferralUser  $referralUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReferralUserRequest $request, ReferralUser $referralUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReferralUser  $referralUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReferralUser $referralUser)
    {
        //
    }
}
