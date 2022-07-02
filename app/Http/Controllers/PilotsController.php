<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePilotRequest;
use App\Http\Requests\UpdatePilotRequest;
use App\Models\Pilot;

class PilotsController extends Controller
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
     * @param  \App\Http\Requests\StorePilotRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePilotRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pilot  $pilot
     * @return \Illuminate\Http\Response
     */
    public function show(Pilot $pilot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pilot  $pilot
     * @return \Illuminate\Http\Response
     */
    public function edit(Pilot $pilot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePilotRequest  $request
     * @param  \App\Models\Pilot  $pilot
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePilotRequest $request, Pilot $pilot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pilot  $pilot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pilot $pilot)
    {
        //
    }
}
