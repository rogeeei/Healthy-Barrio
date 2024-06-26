<?php

namespace App\Http\Controllers;

use App\CitizenHistory;
use Illuminate\Http\Request;
use App\Http\Requests\CitizenHistoryRequest;

class CitizenHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CitizenHistory::all();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return CitizenHistory::findOrFail($id);
    }
}
