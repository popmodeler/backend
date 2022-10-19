<?php

namespace App\Http\Controllers;

use App\Models\PopMission;
use Illuminate\Http\Request;

class PopMissionsController extends Controller
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
    public function showAllPopMissions()
    {
        $result = PopMission::get();

        return response()->json($result);
    }
    public function showOnePopMissions($id_pop)
    {
        return response()->json(PopMissions::find($id_pop));
    }
    public function create(Request $request)
    {
        $mission = PopMission::create($request->all());

        return response()->json($mission, 201);

        // $organization = Organization::findOrFail($id)
    }
    public function update($id, Request $request)
    {
        $mission = PopMission::findOrFail($id);
        $mission->update($request->all());

        return response()->json($mission, 200);
    }
    public function delete($id)
    {
        PopMission::findOrFail($id)->delete();
        return response('Deleted successfully', 200);
    }
}
