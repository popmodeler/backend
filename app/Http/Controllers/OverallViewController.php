<?php

namespace App\Http\Controllers;

use App\Models\OverallView;
use App\Models\Pop;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;


class OverallViewController extends Controller
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
        $pop = OverallView::create($request->all());

        return response()->json($pop, 201);

        // $organization = Organization::findOrFail($id)
    }
    
    public function update($id, Request $request)
    {
        $pop = OverallView::findOrFail($id);
        $pop->update($request->all());

        return response()->json($pop, 200);
    }

    public function delete($id)
    {
        OverallView::findOrFail($id)->delete();
        return response('Deleted successfully', 200);
    }
}
