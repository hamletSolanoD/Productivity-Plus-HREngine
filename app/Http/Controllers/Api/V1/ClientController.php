<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Filters\V1\ClientsFilter;
use App\Http\Resources\V1\ClientCollection;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = new ClientsFilter();
        $filterItems = $filter->transform($request);
        $clients = Client::where($filterItems);
        return new ClientCollection($clients->paginate()->appends($request->query()));
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
     * @param  \App\Http\Requests\StoreClientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientRequest $request)
    {        
        /*
        {
            "uuid":"422f4523-ad80-42bf-94de-977af544f3b3",
            "rfc":"RFC653fr3",
            "employerregistry":"A83636ADS",
            "businessname":"Keystone Ltd",
            "tradename":"Schinner-Mante",
            "legalrepresentative":"Rudolph Henz",
            "phone":"+15758734329",
            "email":"rudolph.henz@solform.net"
        }
        */
        return new ClientResource(Client::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientRequest  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        $client->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
