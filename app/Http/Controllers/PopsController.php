<?php

namespace App\Http\Controllers;

use App\Models\Pop;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;


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
        $result = Pop::with('popMissions.overallView')->get();


        return response()->json($result);
    }
    // public function showOne($id)
    // {
    //     $result = Pop::with(['popMissions.missionProcesses.constituentProcess'=> function ($query) {
    //     }])->find($id)->popMissions->pluck('missionProcesses')->collapse()->pluck('constituentProcess');

    //     return response()->json( $result);
    // }

    public function showOne($id)
    {
        // $result = Pop::with(['popMissions.missionProcesses.constituentProcess','popMissions.missionProcesses.pop'])->get();

        // $results = Pop::with(['popMissions.missionProcesses.constituentProcess','popMissions.missionProcesses.pop'])->whereNull('constituent_process')->get();
        // return response()->json($results);

        // $results = Pop::with(['popMissions.missionProcesses.constituentProcess'=> function ($query) {
        //     }])->find($id)->popMissions->pluck('missionProcesses')->collapse()->pluck('constituentProcess')->filter()->unique('name')->toArray();

        //     $results1 = Pop::with(['popMissions.missionProcesses.pop'=> function ($query) {
        //     }])->find($id)->popMissions->pluck('missionProcesses')->collapse()->pluck('pop')->unique('name');

        //     $result = [$results, $results1];

        //    return response()->json( $results);

        // return response()->json(Pop::with(['popMissions.missionProcesses.constituentProcess'  => function ($query) {
        // }])->find($id)->popMissions->pluck('missionProcesses')->collapse()->pluck('constituentProcess')->unique('name'));

        $constituent = Pop::with([
            'popMissions.missionProcesses.constituentProcess'
        ])->find($id)->popMissions
            ->pluck('missionProcesses')
            ->collapse()
            ->pluck('constituentProcess')
            ->filter()
            ->unique('name')
            ->values()
            ->toArray();
        $pop = Pop::with([
            'popMissions.missionProcesses.pop'
        ])->find($id)->popMissions
            ->pluck('missionProcesses')
            ->collapse()
            ->pluck('pop')
            ->filter()
            ->unique('name')
            ->values()
            ->toArray();

        $result =  array_merge($constituent, $pop);
        return response()->json($result, 200);
    }

    public function showOverallView($id)
    {

        return response()->json(Pop::with(['popMissions.overallView' => function ($query) {
        }])->find($id)->popMissions->pluck('overallView'));
        // return response()->json(Pop::with('popMissions.overallView')->find($id));
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
