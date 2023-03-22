<?php
/*
╔══════════════════════════════════════════════════╗
║        © 2023 Productivity Plus HR Engine        ║
╠══════════════════════════════════════════════════╣
║   In memory of Patricia Ivonne Alvarez Avitia!   ║
╚══════════════════════════════════════════════════╝
*/
namespace App\Http\Controllers\Api\V1;

use App\Models\ActivityFile;

use App\Http\Requests\V1\StoreActivityFileRequest;
use App\Http\Requests\V1\UpdateActivityFileRequest;
use App\Http\Requests\V1\DeleteActivityFileRequest;
use App\Http\Requests\V1\GetActivityFileRequest;

use App\Http\Resources\V1\ActivityFileResource;
use App\Http\Resources\V1\ActivityFileCollection;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class ActivityFileController extends Controller
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
     * @param  \App\Http\Requests\StoreActivityFileRequest  $request
     * @return \Illuminate\Http\Response
     */
    /*
    [url] http://localhost:8000/api/v1/activityfiles [post]
    [request]  file activity_uuid uuid
    */
    public function store(StoreActivityFileRequest $request)
    {
        $name = $request->input('uuid').".".$request->input('extension');
        if($request->hasFile('file')){
            $request->file('file')->storeAs("activityfiles", $name);
        }
        new ActivityFileResource(ActivityFile::create($request->all()));
        return response("created activity file", 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ActivityFile  $activityFile
     * @return \Illuminate\Http\Response
     */
    /*
    [url] http://localhost:8000/api/v1/activityfiles/{uuid} [get] 
    */
    public function show(ActivityFile $activityFile, $uuid)
    {
        $activityfile = ActivityFile::where('uuid', $uuid)->first();
        if(empty($activityfile)){
            return response("activity file uuid dosent exist", 428);
        }
        $file="activityfiles/".$activityfile->uuid.".".$activityfile->extension;
        if(Storage::disk('local')->exists($file)){
            return Storage::disk('local')->download($file);
        } else {
            response("activity file dosent exist", 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ActivityFile  $activityFile
     * @return \Illuminate\Http\Response
     */
    public function edit(ActivityFile $activityFile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateActivityFileRequest  $request
     * @param  \App\Models\ActivityFile  $activityFile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateActivityFileRequest $request, ActivityFile $activityFile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ActivityFile  $activityFile
     * @return \Illuminate\Http\Response
     */
    /*    
    [url] http://localhost:8000/api/v1/activityfiles/{uuid} [delete]
    */
    public function destroy(DeleteActivityFileRequest $request, $uuid)
    {
        $activityfile = ActivityFile::where('uuid', $uuid)->first();
        if(empty($activityfile)){
            return response("activity file uuid dosent exist", 428);            
        }
        $file="activityfiles/".$activityfile->uuid.".".$activityfile->extension;
        if(Storage::disk('local')->exists($file)){
            Storage::disk('local')->delete($file);
        }
        $activityfile->delete();
        return response("deleted activity file", 200);
    }

    
    /*
    [url] http://localhost:8000/api/v1/activityfiles/get [post]
    { "uuid": "1336eb7e-b2c7-32af-b82e-2c2f488ccd7c"}
    */
    public function getFiles(GetActivityFileRequest $request)
    {        
        $activity_uuid = $request->input('activity_uuid');
        $activityfiles = ActivityFile::where('activity_uuid', '=', $activity_uuid)->get();
        return $activityfiles;
    }
}
