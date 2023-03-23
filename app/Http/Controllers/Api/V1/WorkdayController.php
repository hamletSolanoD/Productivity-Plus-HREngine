<?php
/*
╔══════════════════════════════════════════════════╗
║        © 2023 Productivity Plus HR Engine        ║
╠══════════════════════════════════════════════════╣
║   In memory of Patricia Ivonne Alvarez Avitia!   ║
╚══════════════════════════════════════════════════╝
*/
namespace App\Http\Controllers\Api\V1;

use App\Models\Workday;
use App\Models\Employee;
use App\Models\Employer;

use App\Http\Requests\V1\GetWorkdayRequest;
use App\Http\Requests\V1\InWorkdayRequest;
use App\Http\Requests\V1\OutWorkdayRequest;
use App\Http\Requests\V1\CheckWorkdayRequest;
use App\Http\Requests\V1\StoreWorkdayRequest;
use App\Http\Requests\V1\UpdateWorkdayRequest;
use App\Http\Requests\V1\DeleteWorkdayRequest;
use App\Http\Requests\V1\GetWorkdayByEmployeerRequest;

use App\Http\Resources\V1\WorkdayResource;
use App\Http\Resources\V1\WorkdayCollection;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class WorkdayController extends Controller
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
     * @param  \App\Http\Requests\StoreWorkdayRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWorkdayRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Workday  $workday
     * @return \Illuminate\Http\Response
     */
    public function show(Workday $workday)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Workday  $workday
     * @return \Illuminate\Http\Response
     */
    public function edit(Workday $workday)
    {
        //
    }

    // [url] /api/v1/workdays/{uuid} [patch]
    public function update(UpdateWorkdayRequest $request, $uuid)
    {
        $workday = Workday::where('uuid', $uuid)->first();
        if(empty($workday)){
            return response("workday uuid dosent exist", 428);
        }
        $workday->update($request->all());
        return response("updated workday", 200);
    }

    // [url] /api/v1/workdays/{uuid} [delete]
    public function destroy(DeleteWorkdayRequest $request, $uuid)
    {
        $workday = Workday::where('uuid', $uuid)->first();
        if(empty($workday)){
            return response("workday uuid dosent exist", 428);
        }
        $workday->delete();
        return response("deleted workday", 200);
    }
    
    //[url] /api/v1/workdays/get [post]
    public function getWorkday(GetWorkdayRequest $request)
    {
        //200 workday opened, 409 workday closed, 428 workday not found
        //1. agregar los dias laborales del contrato
        $employee_uuid = $request->input('employee_uuid');
        $employer_uuid = $request->input('employer_uuid');
        $timezone = $request->input('timezone');
        $id = DB::table('workdays')->where('employee_uuid', '=', $employee_uuid)->orderBy('id', 'desc')->take(1)->value('id');
        $workday = WorkDay::where('id', $id)->first();
        if(!empty($workday)){
            $now_c = Carbon::now();
            if($workday['status'] == "O"){
                $lapsedMinutes = $now_c->diffInMinutes($workday['start']);
                $start_tz = new \DateTime($workday['start'], new \DateTimeZone('UTC') );
                $start_tz->setTimeZone(new \DateTimeZone($workday['timezone']));
                $workday['start'] = $start_tz->format('Y-m-d H:i:s');
                $workday = $workday->makeHidden("employer_id", "employee_id")->toArray();
                $workday['lapsedMinutes'] = $lapsedMinutes;
                return response()->json($workday, 200);
            } else {                
                return response("Workday closed", 409);
            }
        } else {
            return response("employee dosent have workday", 428);
        }
        
    }
    
    // [url] http://localhost:8000/api/v1/workdays/in [post]
    public function inWorkday(InWorkdayRequest $request)
    {
        $uuid = $request->input('uuid');
        new WorkdayResource(WorkDay::create($request->all()));
        return response($uuid, 200);
    }

    // [url] http://localhost:8000/api/v1/workdays/out [post]
    public function outWorkday(OutWorkdayRequest $request)
    {
        $uuid = $request->input('uuid');
        $workday = Workday::where('uuid', $uuid)->first();
        $place_out = $request->input('place_out');
        $latitude_out = $request->input('latitude_out');
        $longitude_out = $request->input('longitude_out');
        if(empty($workday)){
            return response("workday uuid dosent exist", 428);
        }
        $workday->status = "C";
        $end = Carbon::now();
        $minutes = Carbon::now()->diffInMinutes($workday->start);
        $workday->minutes = $minutes;
        $workday->end = $end;
        $workday->place_out = $place_out;
        $workday->latitude_out = $latitude_out;
        $workday->longitude_out = $longitude_out;
        if($workday->save()){
            return response("workday out", 200);
        } else {            
            return response("system error", 500);
        }
    }
    
    // [url] /api/v1/employees/getActivities [post]
    public function getWorkdaysByEmployeer(GetWorkdayByEmployeerRequest $request)
    {
        $employer_uuid = $request->input('employer_uuid');
        $workdays = Workday::where('employer_uuid', '=', $employer_uuid)
        ->orderBy('id', 'desc')
        ->get();
        return $workdays;
    }
}