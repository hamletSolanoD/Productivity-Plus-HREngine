<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Workday;
use App\Http\Requests\V1\GetWorkdayRequest;
use App\Http\Requests\V1\CheckWorkdayRequest;
use App\Http\Requests\StoreWorkdayRequest;
use App\Http\Requests\UpdateWorkdayRequest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWorkdayRequest  $request
     * @param  \App\Models\Workday  $workday
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWorkdayRequest $request, Workday $workday)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Workday  $workday
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workday $workday)
    {
        //
    }
    
    /*
    request
    {
        "employee_uuid": "7b984f91-be17-3dcd-af52-9e74fcfb3327",
        "company_uuid": "88ac45cb-35e8-36ab-beef-53934a1116e6",
        "client_uuid": "69c25a44-8cab-3405-b654-90d9aefa2696"
    }
    */
    public function getWorkday(GetWorkdayRequest $request)
    {        
        //1. agregar los dias laborales del contrato
        $employee_uuid = $request->input('employee_uuid');
        $company_uuid = $request->input('company_uuid');
        $client_uuid = $request->input('client_uuid');
        if(!empty($employee_uuid) && (!empty($company_uuid) || !empty($client_uuid))){      
            $id = DB::table('workdays')->where('employee_uuid', '=', $employee_uuid)->orderBy('id', 'desc')->take(1)->value('id');
            $workday = WorkDay::where('id', $id)->first();
            //$workday = WorkDay::where('employee_uuid', $employee_uuid)->last();
            if(!empty($workday)){
                $now = new \DateTime("now", new \DateTimeZone('America/Denver') );
                $now_c = new Carbon($now);
                if($workday['status'] == "O"){
                    $lapsedMinutes = $now_c->diffInMinutes($workday['start']);
                    $data = ['new' => false, 'message' => 'Work day opened', 'workday' => $workday, 'lapsedMinutes' => $lapsedMinutes];
                    return response()->json($data, 203);
                } else {
                    $data = ['new' => true, 'message' => 'New work day the last work day is closed o paused'];
                    return response()->json($data, 200);
                }
            } else {
                $data = ['new' => true, 'message' => 'New work day'];
                return response()->json($data, 200);
            }
        } else {
            $data = ['login' => false, 'message' => 'Please specify employee_uuid and company_uuid or company_uuid'];
            return response()->json($data, 203);
        }
    }

    /*
    request
    {
        "action": "in",
        "employee_uuid": "7b984f91-be17-3dcd-af52-9e74fcfb3327",
        "company_uuid": "88ac45cb-35e8-36ab-beef-53934a1116e6",
        "client_uuid": "69c25a44-8cab-3405-b654-90d9aefa2696",
        "place": "Av. de los Insurgentes 5022, Mascareñas, 32340 Cd Juárez, Chih.",
        "latitude": 31.7309652,
        "longitude": -106.440468
    }
    {
        "action": "out",
        
        "employee_uuid": "7b984f91-be17-3dcd-af52-9e74fcfb3327",
        "company_uuid": "88ac45cb-35e8-36ab-beef-53934a1116e6",
        "client_uuid": "69c25a44-8cab-3405-b654-90d9aefa2696",
        "place": "Av. de los Insurgentes 5022, Mascareñas, 32340 Cd Juárez, Chih.",
        "latitude": 31.7309652,
        "longitude": -106.440468
    }
    */
    public function checkWorkday(CheckWorkdayRequest $request)
    {
        $action = $request->input('action');
        $uuid = $request->input('uuid');
        $employee_uuid = $request->input('employee_uuid');
        $company_uuid = $request->input('company_uuid');
        $client_uuid = $request->input('client_uuid');
        $place = $request->input('place');
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');
        if($action == "in"){            
            $start = new \DateTime("now", new \DateTimeZone('America/Denver') );
            $date = $start->format("Y-m-d");
            $id = DB::table('workdays')->insertGetId([
                'employee_uuid' => $employee_uuid,
                'company_uuid'   => $company_uuid,
                'client_uuid'   => $client_uuid,
                'status' => 'O',
                'date' => $date,
                'start' => $start,
                'place' => $place,
                'latitude' => $latitude,
                'longitude' => $longitude
            ]);
            return response()->json(['id' => $id], 200);
        }
        if($action == "out"){

        }
        /*
        'employee_uuid',
        'client_uuid',
        'company_uuid',
        'status',
        'date',
        'start',
        'pause',
        'resume',
        'end',
        'minutes',
        'latitude',
        'longitude',
        'place',
        */
    }
    /*
    
    /*
    employee_uuid
    comp_uuid
    getJornada(): meotodo que devuelve si es un nuevo dia laboral o si es un dia laboral en curso, 
    la manera de definir esto sera por una comparativa donde si la ultima actividad registrada es una salida.
    entonces crear nuevo dia laboral o si la ultima actividad registrada tiene una diferencia de ahorita mayor o igual a la cantidad de horas laborales en contrato significa que a la persona se le olvido el dia antrior registrar su salida y es un nuevo dia laboral 
    */
}
