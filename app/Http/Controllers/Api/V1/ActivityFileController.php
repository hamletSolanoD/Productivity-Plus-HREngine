<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\ActivityFile;

use App\Http\Resources\V1\ActivityFileResource;
use App\Http\Resources\V1\ActivityFileCollection;

use App\Http\Requests\V1\StoreActivityFileRequest;
use App\Http\Requests\V1\UpdateActivityFileRequest;

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
            $request->file('file')->storeAs(".", $name);
        }
        new ActivityFileResource(ActivityFile::create($request->all()));
        return response("created activity file", 200);
        /*
        $file = $request->input('uuid').".".$request->input('extension');
        $file64 = $request->input('file64');
        Storage::disk('local')->put($file, base64_decode($file64));
        */
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
        $file=$activityfile->uuid.".".$activityfile->extension;
        if(Storage::disk('local')->exists($file)){
            return Storage::disk('local')->download($file);
        } else {
            response("activity fille uuid dosent exist", 404);
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
    public function destroy(ActivityFile $activityFile)
    {
        //
    }
}
