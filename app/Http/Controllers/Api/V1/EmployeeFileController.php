<?php

namespace App\Http\Controllers;

use App\Models\EmployeeFile;
use App\Http\Requests\StoreEmployeeFileRequest;
use App\Http\Requests\UpdateEmployeeFileRequest;

class EmployeeFileController extends Controller
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
     * @param  \App\Http\Requests\StoreEmployeeFileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeeFileRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmployeeFile  $employeeFile
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeFile $employeeFile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmployeeFile  $employeeFile
     * @return \Illuminate\Http\Response
     */
    public function edit(EmployeeFile $employeeFile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmployeeFileRequest  $request
     * @param  \App\Models\EmployeeFile  $employeeFile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeeFileRequest $request, EmployeeFile $employeeFile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeeFile  $employeeFile
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeFile $employeeFile)
    {
        //
    }
}
