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

use App\Http\Requests\V1\StoreActivityRequest;
use App\Http\Requests\V1\UpdateActivityRequest;

use App\Http\Requests\V1\StartActivityRequest;
use App\Http\Requests\V1\EndActivityRequest;
use App\Http\Requests\V1\DeleteActivityRequest;

use App\Http\Resources\V1\ActivityResource;
use App\Http\Resources\V1\ActivityCollection;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

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

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateActivityRequest  $request
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    /*
    [url] http://localhost:8000/api/v1/activities/{uuid} [patch] 
    [request] { "type": "B", "timezone": "America/Denver", "description": "Pause to go to the store" }
    */
    public function update(UpdateActivityRequest $request, $uuid)
    {
        $activity = Activity::where('uuid', $uuid)->first();
        if(empty($activity)){
            return response("activity uuid dosent exist", 428);
        }
        $activity->update($request->all());
        return response("updated activity", 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    /*
    [url] http://localhost:8000/api/v1/activities/{uuid} [delete]
    */
    public function destroy(DeleteActivityRequest  $request, $uuid)
    {
        $activity = Activity::where('uuid', $uuid)->first();
        if(empty($activity)){
            return response("activity uuid dosent exist", 428);
        }
        $activity->delete();
        return response("deleted activity", 200);
    }

    /*
    [url] http://localhost:8000/api/v1/activities/start [post]
    [request] { "workday_uuid": "b8a494b4-ab5c-339d-9cda-18ab5e182c75", "uuid": "5a217fd2-0c57-4e4c-a802-c8bf10581bf8", "type": "B", "timezone": "America/Denver", "description": "Pause to go to the store", "place": "3079 Gorczany Loaf Apt. 301 Cormierside, WY 41845", "latitude": 33.484421, "longitude": 127.429321 }
    */
    public function startActivity(StartActivityRequest $request)
    {
        new ActivityResource(Activity::create($request->all()));
        return response("Activity start", 200);
    }
    
    /*
    [url] http://localhost:8000/api/v1/activities/end [post]
    [request] { "uuid": "74473efd-05c2-37d5-925f-b53b527201de", "description": "Return to job", "place_end": "Insurgentes 5022 El Colegio Cd Juarez, Chih", "latitude_end": 31.7309313, "longitude_end": -106.440384 }
    */
    public function endActivity(EndActivityRequest $request)
    {
        $uuid = $request->input('uuid');
        $activity = Activity::where('uuid', $uuid)->first();
        if(empty($activity)){
            return response("activity uuid dosent exist", 428);
        }
        $activity->description = $request->input('description');
        $activity->place_end = $request->input('place_end');
        $activity->latitude_end = $request->input('latitude_end');
        $activity->longitude_end = $request->input('longitude_end');
        $activity->status = "C";
        $end = Carbon::now();
        $activity->end = $end;
        $minutes = Carbon::now()->diffInMinutes($activity->start);
        $activity->minutes = $minutes;
        if($activity->save()){
            return response("activity out", 200);
        } else {            
            return response("system error", 500);
        }

    }
}
