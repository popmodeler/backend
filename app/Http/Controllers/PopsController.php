<?php

namespace App\Http\Controllers;

use App\Models\Pop;
use Illuminate\Http\Request;

class PopsController extends Controller
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
    public function showAll()
    {
        $result = Pop::with('Pop','Pops')->get();


        return response()->json($result);
    }
    public function showOne($id_pop)
    {
        return response()->json(Pop::find($id_pop));
    }
    public function create(Request $request)
    {
        $pop = Pop::create($request->all());

        return response()->json($pop, 201);

        // $organization = Organization::findOrFail($id)
    }
    public function update($id, Request $request)
    {
        
        $pop = Pop::findOrFail($id);
        $pop->update($request->all());

        return response()->json($pop, 200);
    }
    public function delete($id)
    {
        Pop::findOrFail($id)->delete();
        return response('Deleted successfully', 200);
    }
}
