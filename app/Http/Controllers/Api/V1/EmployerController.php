<?php
/*
╔══════════════════════════════════════════════════╗
║        © 2023 Productivity Plus HR Engine        ║
╠══════════════════════════════════════════════════╣
║   In memory of Patricia Ivonne Alvarez Avitia!   ║
╚══════════════════════════════════════════════════╝
*/
namespace App\Http\Controllers\Api\V1;

use App\Models\Employer;

use App\Http\Requests\V1\StoreEmployerRequest;
use App\Http\Requests\V1\UpdateEmployerRequest;
use App\Http\Requests\V1\DeleteEmployerRequest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployerController extends Controller
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
     * Display the specified resource.
     *
     * @param  \App\Models\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function show(Employer $employer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function edit(Employer $employer)
    {
        //
    }

    // [url] /v1/employers/ [post]
    public function store(StoreEmployerRequest $request)
    {

    }

    // [url] /v1/employers/{uuid} [patch]
    public function update(UpdateEmployerRequest $request)
    {

    }

    // [url] /v1/employers/{uuid} [delete]
    public function destroy(DeleteEmployerRequest $request)
    {

    }
}
