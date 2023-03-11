<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientsStoreRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Client::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientsStoreRequest $request)
    {
        $created_client = Client::create($request->validated());

        return new Client($created_client);
    }

    /**
     * Display the specified resource.
     */
    public function show($surname)
    {
        $client = Client::where('surname', $surname)->firstOrFail();
        return response()->json($client);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

//    public function getClientDetails(Request $request)
//    {
//        $surname = $request->input('surname');
//        $client = Client::where('surname', $surname)->first();
//
//        return response()->json($client);
//    }
}
