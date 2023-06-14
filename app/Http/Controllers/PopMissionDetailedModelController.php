<?php

namespace App\Http\Controllers;

use App\Models\PopMissionDetailedModel;
use App\Models\Pop;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;


class PopMissionDetailedModelController extends Controller
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



    public function create(Request $request)
    {
        $pop = PopMissionDetailedModel::create($request->all());

        return response()->json($pop, 201);

        // $organization = Organization::findOrFail($id)
    }
    
    public function update($id, Request $request)
    {
        $pop = PopMissionDetailedModel::findOrFail($id);
        $pop->update($request->all());

        return response()->json($pop, 200);
    }

    public function delete($id)
    {
        PopMissionDetailedModel::findOrFail($id)->delete();
        return response('Deleted successfully', 200);
    }
}
