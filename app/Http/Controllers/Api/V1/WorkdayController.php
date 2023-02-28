<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Workday;
use App\Http\Requests\V1\GetWorkdayRequest;
use App\Http\Requests\StoreWorkdayRequest;
use App\Http\Requests\UpdateWorkdayRequest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
    
    public function getWorkday(GetWorkdayRequest $request)
    {
        $employee_uuid = $request->input('employee_uuid');
        $company_uuid = $request->input('company_uuid');
        $client_uuid = $request->input('client_uuid');
        //return response()->json(['employee_uuid' => $employee_uuid, 'company_uuid' => $company_uuid, 'client_uuid' => $client_uuid], 200);             
        if(!empty($employee_uuid) && (!empty($company_uuid) || !empty($client_uuid))){            
            $workday = WorkDay::where('employee_uuid', $employee_uuid)->first();
            if(!empty($workday)){
                //cata.rivera.jrz@gmail.com
                if($workday['status'] == "O"){
                    $data = ['new' => false, 'message' => 'Work day opened', 'workday' => $workday];
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
    employee_uuid
    comp_uuid
    getJornada(): meotodo que devuelve si es un nuevo dia laboral o si es un dia laboral en curso, 
    la manera de definir esto sera por una comparativa donde si la ultima actividad registrada es una salida.
    entonces crear nuevo dia laboral o si la ultima actividad registrada tiene una diferencia de ahorita mayor o igual a la cantidad de horas laborales en contrato significa que a la persona se le olvido el dia antrior registrar su salida y es un nuevo dia laboral 
    */
}
