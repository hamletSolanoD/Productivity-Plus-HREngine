<?php

namespace App\Http\Controllers;

use App\Models\Binnacle;
use App\Http\Requests\StoreBinnacleRequest;
use App\Http\Requests\UpdateBinnacleRequest;

class BinnacleController extends Controller
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
     * @param  \App\Http\Requests\StoreBinnacleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBinnacleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Binnacle  $binnacle
     * @return \Illuminate\Http\Response
     */
    public function show(Binnacle $binnacle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Binnacle  $binnacle
     * @return \Illuminate\Http\Response
     */
    public function edit(Binnacle $binnacle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBinnacleRequest  $request
     * @param  \App\Models\Binnacle  $binnacle
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBinnacleRequest $request, Binnacle $binnacle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Binnacle  $binnacle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Binnacle $binnacle)
    {
        //
    }
}
