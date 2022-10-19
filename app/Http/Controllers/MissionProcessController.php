<?php

namespace App\Http\Controllers;

use App\Models\MissionProcess;
use Illuminate\Http\Request;

class MissionProcessController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function showAllMissionProcess()
    {
        return response()->json(MissionProcess::all(), 200);
    }

    public function create(Request $request)
    {
        $MissionProcess = MissionProcess::create($request->all());

        return response()->json($MissionProcess, 201);
    }

    //
}
