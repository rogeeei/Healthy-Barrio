<?php

namespace App\Http\Controllers;

use App\Models\CitizenDetails;
use App\Http\Requests\CitizenDetailsRequest;

class CitizenDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CitizenDetails::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CitizenDetailsRequest $request)
    {
        // Retrieve the validated input data...
        $validated = $request->validated();

        $citizendetails = CitizenDetails::create($validated);

        return $citizendetails;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return CitizenDetails::findOrFail($id);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $citizendetails = CitizenDetails::findOrFail($id);

        $citizendetails->delete();

        return $citizendetails;
    }
}
