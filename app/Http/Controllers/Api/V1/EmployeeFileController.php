<?php
/*
╔══════════════════════════════════════════════════╗
║        © 2023 Productivity Plus HR Engine        ║
╠══════════════════════════════════════════════════╣
║   In memory of Patricia Ivonne Alvarez Avitia!   ║
╚══════════════════════════════════════════════════╝
*/
namespace App\Http\Controllers\Api\V1;

use App\Models\EmployeeFile;
use App\Http\Requests\V1\StoreEmployeeFileRequest;
use App\Http\Requests\V1\UpdateEmployeeFileRequest;
use App\Http\Requests\V1\DeleteEmployeeFileRequest;
use App\Http\Requests\V1\GetEmployeeFileRequest;
use App\Http\Requests\V1\ViewEmployeeFileRequest;

use App\Http\Resources\V1\EmployeeFileResource;
use App\Http\Resources\V1\EmployeeFileCollection;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;


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

    //[url] /api/v1/employeefiles [post]
    public function store(StoreEmployeeFileRequest $request)
    {
        $uuid = $request->input('uuid');
        $name = $uuid.".".$request->input('extension');
        if($request->hasFile('file')){
            $request->file('file')->storeAs("employeefiles", $name);
        }
        new EmployeeFileResource(EmployeeFile::create($request->all()));
        return response($uuid, 200);
    }

    // [url] /api/v1/employeefiles/{uuid} [get] 
    public function show(ViewEmployeeFileRequest $request, $uuid)
    {
        $employeefile = EmployeeFile::where('uuid', $uuid)->first();
        if(empty($employeefile)){
            return response("employee file uuid dosent exist", 428);
        }
        $file="employeefiles/".$employeefile->uuid.".".$employeefile->extension;
        if(Storage::disk('local')->exists($file)){
            return Storage::disk('local')->download($file);
        } else {
            return response("employee file dosent exist", 404);
        }
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

    // [url] /api/v1/employeefiles/{uuid} [patch] 
    public function update(UpdateEmployeeFileRequest $request, $uuid)
    {
        $employeefile = EmployeeFile::where('uuid', $uuid)->first();
        if(empty($employeefile)){
            return response("employee file uuid dosent exist", 428);
        }
        $employeefile->update($request->all());
        return response("updated employe efile", 200);
    }

    // [url] /api/v1/employeefiles/{uuid} [delete]
    public function destroy(DeleteEmployeeFileRequest $request, $uuid)
    {
        $employeefile = EmployeeFile::where('uuid', $uuid)->first();
        if(empty($employeefile)){
            return response("employee file uuid dosent exist", 428);            
        }
        $file="employeefiles/".$employeefile->uuid.".".$employeefile->extension;
        if(Storage::disk('local')->exists($file)){
            Storage::disk('local')->delete($file);
        }
        $employeefile->delete();
        return response("deleted employee file", 200);
    }
    
    //[url] /api/v1/employeefiles/get [post]
    public function getFiles(GetEmployeeFileRequest $request)
    {        
        $employee_uuid = $request->input('employee_uuid');
        $employeefiles = EmployeeFile::where('employee_uuid', '=', $employee_uuid)->get();
        return $employeefiles;
    }
}