<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Filters\V1\EmployeesFilter;
use App\Http\Resources\V1\EmployeeCollection;

use Illuminate\Support\Arr;
use App\Http\Requests\GetEmployeesRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = new EmployeesFilter();
        $filterItems = $filter->transform($request);
        $employees = Employee::where($filterItems);
        return new EmployeeCollection($employees->paginate()->appends($request->query()));
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
     * @param  \App\Http\Requests\StoreEmployeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmployeeRequest  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
    
    /*
    [url] http://localhost:8000/api/v1/workdays/get [post]
    { "employer_uuid": "1336eb7e-b2c7-32af-b82e-2c2f488ccd7c"}
    */
    public function getEmployees(GetEmployeesRequest $request)
    {
        $employer_uuid = $request->input('employer_uuid');
        //$id = DB::table('employees')->where('employee_uuid', '=', $employee_uuid);
        $employees = Employee::where('employer_uuid', $employer_uuid);
    }
}
