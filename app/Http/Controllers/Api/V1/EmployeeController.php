<?php
/*
╔══════════════════════════════════════════════════╗
║        © 2023 Productivity Plus HR Engine        ║
╠══════════════════════════════════════════════════╣
║   In memory of Patricia Ivonne Alvarez Avitia!   ║
╚══════════════════════════════════════════════════╝
*/

namespace App\Http\Controllers\Api\V1;

use App\Models\Activity;
use App\Models\Employee;
use App\Http\Requests\V1\StoreEmployeeRequest;
use App\Http\Requests\V1\UpdateEmployeeRequest;
use App\Http\Requests\V1\DeleteEmployeeRequest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\V1\EmployeeResource;
use App\Http\Resources\V1\EmployeeCollection;
use App\Filters\V1\EmployeesFilter;

use Illuminate\Support\Arr;
use App\Http\Requests\V1\GetEmployeesRequest;
use App\Http\Requests\V1\GetEmployeeActivityRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

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

    // [url] /v1/employees/ [post]
    public function store(StoreEmployeeRequest $request)
    {
    }

    // [url] /v1/employees/{uuid} [patch]
    public function update(UpdateEmployeeRequest $request)
    {
    }

    // [url] /v1/employers/{uuid} [delete]
    public function destroy(DeleteEmployeeRequest $employee)
    {
    }

    // [url] /api/v1/employees/get [post]
    public function getEmployees(GetEmployeesRequest $request)
    {
        //if the user is employer then all the users of type employee that also have their employeer the same
        $user_uuid = $request->input('user_uuid');
        $user = User::where('uuid', '=', $user_uuid)->get()->first();

        $employees = User::where('type', '=', 'e')->where('employer_uuid', '=', $user["employer_uuid"])->get();


        return $employees;
    }

    // [url] /api/v1/employees/getActivities [post]
    public function getActivities(GetEmployeeActivityRequest $request)
    {
        $employee_uuid = $request->input('employee_uuid');
        $type = $request->input('type');
        $conditions = array();
        $conditions[] = array('workdays.employee_uuid', '=', $employee_uuid);
        if (!empty($type)) {
            $conditions[] = array('type', '=', $type);
        }
        $activities = Activity::join('workdays', 'workdays.id', '=', 'activities.workday_id')
            ->select('activities.*')
            ->where($conditions)
            ->orderBy('id', 'desc')
            ->get();
        return $activities;
    }
}
