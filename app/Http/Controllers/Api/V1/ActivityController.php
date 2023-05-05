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
use App\Models\Workday;
use App\Models\User;


use App\Http\Requests\V1\StoreActivityRequest;
use App\Http\Requests\V1\UpdateActivityRequest;

use App\Http\Requests\V1\StartActivityRequest;
use App\Http\Requests\V1\EndActivityRequest;
use App\Http\Requests\V1\DeleteActivityRequest;
use App\Http\Requests\V1\GetActivityRequest;

use App\Http\Resources\V1\ActivityResource;
use App\Http\Resources\V1\ActivityCollection;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class ActivityController extends Controller
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
     * @param  \App\Http\Requests\StoreActivityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActivityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
        //
    }

    // [url] /api/v1/activities/{uuid} [patch]
    public function update(UpdateActivityRequest $request, $uuid)
    {
    }

    // [url] /api/v1/activities/{uuid} [delete]
    public function destroy(DeleteActivityRequest  $request, $uuid)
    {
    }

    // [url] /api/v1/activities/start [post]
    public function startActivity(StartActivityRequest $request)
    {
        $uuid = $request->input('uuid');
        new ActivityResource(Activity::create($request->all()));


        return response($uuid, 200);
    }

    // [url] /api/v1/activities/end [post]
    public function endActivity(EndActivityRequest $request)
    {
    }

    // [url] /api/v1/activities/get [post]
    public function getActivities(GetActivityRequest $request)
    {
        /**
         * solo se  le pasara el userUUID dependiendo del tipo de user uuid que sea le apareceran diferentes actividades
         * si es e le apareceran unicamente sus actividades como empleado
         * si es b le apareceran todas las actividades de sus empleados
         * si es a le apareceran todas las actividades de todo
         */
        $user_uuid = $request->input('user_uuid');
        $user = User::where('uuid', $user_uuid)->first();
        $conditions = array();

        switch ($user["type"]) {
            case "e":
                $conditions[] = array('workdays.employee_uuid', '=', $user["employee_uuid"]);
                break;
            case "a":
                break;
            case "b":
                $conditions[] = array('workdays.employer_uuid', '=', $user["employer_uuid"]);
                break;
        }

        $activities = Activity::join('workdays', 'workdays.id', '=', 'activities.workday_id')
            ->select('activities.*')
            ->where($conditions)
            ->orderBy('id', 'desc')
            ->get();
        return $activities;
    }
}
