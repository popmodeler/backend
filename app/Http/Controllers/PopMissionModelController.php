<?php

namespace App\Http\Controllers;

use App\Models\PopMissionsModel;
use App\Models\Pop;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;


class PopMissionModelController extends Controller
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
        $pop = PopMissionsModel::create($request->all());

        return response()->json($pop, 201);

        // $organization = Organization::findOrFail($id)
    }
    
    public function update($id, Request $request)
    {
        $pop = PopMissionsModel::findOrFail($id);
        $pop->update($request->all());

        return response()->json($pop, 200);
    }

    public function delete($id)
    {
        PopMissionsModel::findOrFail($id)->delete();
        return response('Deleted successfully', 200);
    }
}
