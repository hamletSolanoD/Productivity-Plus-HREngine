<?php

namespace App\Http\Controllers;

use App\Models\Workcontract;
use App\Http\Requests\StoreWorkcontractRequest;
use App\Http\Requests\UpdateWorkcontractRequest;

class WorkcontractController extends Controller
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
     * @param  \App\Http\Requests\StoreWorkcontractRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWorkcontractRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Workcontract  $workcontract
     * @return \Illuminate\Http\Response
     */
    public function show(Workcontract $workcontract)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Workcontract  $workcontract
     * @return \Illuminate\Http\Response
     */
    public function edit(Workcontract $workcontract)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWorkcontractRequest  $request
     * @param  \App\Models\Workcontract  $workcontract
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWorkcontractRequest $request, Workcontract $workcontract)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Workcontract  $workcontract
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workcontract $workcontract)
    {
        //
    }
}
