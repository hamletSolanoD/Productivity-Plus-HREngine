<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\ActivityFile;
use App\Http\Requests\StoreActivityFileRequest;
use App\Http\Requests\UpdateActivityFileRequest;

class ActivityFileController extends Controller
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
     * @param  \App\Http\Requests\StoreActivityFileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActivityFileRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ActivityFile  $activityFile
     * @return \Illuminate\Http\Response
     */
    public function show(ActivityFile $activityFile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ActivityFile  $activityFile
     * @return \Illuminate\Http\Response
     */
    public function edit(ActivityFile $activityFile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateActivityFileRequest  $request
     * @param  \App\Models\ActivityFile  $activityFile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateActivityFileRequest $request, ActivityFile $activityFile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ActivityFile  $activityFile
     * @return \Illuminate\Http\Response
     */
    public function destroy(ActivityFile $activityFile)
    {
        //
    }
}
