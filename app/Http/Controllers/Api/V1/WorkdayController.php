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
use App\Http\Requests\StoreWorkdayRequest;
use App\Http\Requests\UpdateWorkdayRequest;

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
    [url] http://localhost:8000/api/v1/workdays/get [post]
    { "employer_uuid": "1336eb7e-b2c7-32af-b82e-2c2f488ccd7c", "employee_uuid": "9e35e454-8f31-3f04-b8fb-77d2ed9eaee9" }
    */
    public function getWorkday(GetWorkdayRequest $request)
    {
        //1. agregar los dias laborales del contrato
        //se guardan todos los datos en UTC y se muestran en el timezone seleccionado
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
                $data = ['new' => false, 'message' => 'Work day opened', 'workday' => $workday, 'lapsedMinutes' => $lapsedMinutes];
                return response()->json($data, 203);
            } else {
                $data = ['new' => true, 'message' => 'New work day the last work day is closed'];
                return response()->json($data, 200);
            }
        } else {
            $data = ['new' => true, 'message' => 'New work day'];            
            return response()->json($data, 200);
        }
    }
    /*
    [url] http://localhost:8000/api/v1/workdays/get [post]
    { "employer_uuid": "1336eb7e-b2c7-32af-b82e-2c2f488ccd7c", "employee_uuid": "9e35e454-8f31-3f04-b8fb-77d2ed9eaee9" }
    */
    public function inWorkday(InWorkdayRequest $request)
    {
        //error employee a empoyer id
        //[date] timezone
        $uuid = $request->input('uuid');
        $employee_uuid = $request->input('employee_uuid');
        $employee = Employee::where('uuid', $employee_uuid)->first();
        $employee_id = !empty($employee) ? $employee->id : 0;
        $employer_uuid = $request->input('empolyer_uuid');
        $employer = Employer::where('uuid', $employer_uuid)->first();
        $employer_id = !empty($employer) ? $employer->id : 0;
        $place = $request->input('place');
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');
        $timezone = $request->input('longitude');
        $start = Carbon::now();
        $date = $start->format("Y-m-d");
        $id = DB::table('workdays')->insertGetId([
            'employee_uuid' => $employee_uuid,
            'employee_id' => $employee_id,
            'employer_uuid'   => $employer_uuid,
            'employer_id'   => $employer_id,
            'status' => 'O',
            'uuid' => $uuid,
            'date' => $date,
            'start' => $start,
            'timezone' => $longitude,
            'place' => $place,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'created_at' => $start
        ]);
        if(!empty($id)){
            return response()->json(['success'   => true, 'message'   => 'Cheched in'], 200);
        } else {            
            return response()->json(['success'   => false, 'message'   => 'System error'], 203);
        }
    }

    public function outWorkday(OutWorkdayRequest $request)
    {
        $uuid = $request->input('uuid');
        $workday = Workday::where('uuid', $uuid)->first();
        $place_out = $request->input('place_out');
        $latitude_out = $request->input('latitude_out');
        $longitude_out = $request->input('longitude_out');
        if(empty($workday)){
            return;
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
            return response()->json(['success'   => true, 'message'   => 'Cheched out'], 200);
        } else {            
            return response()->json(['success'   => false, 'message'   => 'System error'], 203);
        }
    }

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
