<?php

namespace App\Http\Controllers;

use App\Models\ConstituentProcess;
use App\Models\TemporaryFile;
use Illuminate\Http\Request;

class ConstituentProcessController extends Controller
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
        return response()->json(ConstituentProcess::all(), 200);
    }
    public function delete($id)
    {
        $delete=ConstituentProcess::findOrFail($id);



        unlink('C:\Users\biels\Desktop\pop-back\public\ConstituentProcess\\'.$delete->file_name);
    //    rmdir('C:\Users\biels\Desktop\pop-back\public\ConstituentProcess\\'.$delete->file_name);
        $delete->delete();

        return response('Deleted successfully', 200);
    }

    public function create(Request $request)
    {
        $constituent = ConstituentProcess::create($request->all());

        return response()->json($constituent, 201);
    }
    public function update($id, Request $request)
    {
        $constituent = ConstituentProcess::findOrFail($id);
        $constituent->update($request->all());

        return response()->json($constituent, 200);
    }

        // $process = ConstituentProcess::create([
        //     'name'=>$request->name,
        //     'description'=>$request->description,
        //     'alliance_member_id'=>$request->alliance_member_id,
        //     'file_name'=>$request->file,
        //     'file_type'=>$request->alliance_member_id,
        //     'location'=>'ConstituenProcess'
        //     'user_id'=>$request->user_id,
        // ]);
        // $temporaryfile=TemporaryFile::where('folder',$request->file)->first();
        // dd($temporaryfile);
        // if($temporaryfile){

        //     $process->addMedia(storage_path('public/ConstituentProcess/'.$temporaryfile->filename))
        //     ->toMediaCollection('files');
        //     rmdir(storage_path('public/ConstituentProcess/'.$temporaryfile->filename));
        //     $temporaryfile->delete();
        // }
        // $product = new ConstituentProcess();

        // if ($request->hasFile('file')) {
        //     $file = $request->file('file');

        //     $allowedfileExtention = ['pdf','png','jpeg', 'bpmn'];
        //     $extention = $file->getClientOriginalExtension();
        //     $check = in_array($extention, $allowedfileExtention);
        //     if ($check) {
        //         $name =time().$file->getClientOriginalName();
        //         $file->move('ConstituentProcess', $name);
        //         $product->file_name = $name;
        //         $product->file_type =

        //         $product->location = $request->input('/ConstituentProcess');

        //         $product->name = $request->input('name');
        //         $product->description = $request->input('description');
        //         $product->alliance_member_id = $request->input('alliance_member_id');
        //     }
        //     $product->save();

        //     return $this->responseRequestSuccess($product);
        // } else {
        //     return $this->responseRequestError('File not found');
        // }


    protected function responseRequestSuccess($ret)
    {
        return response()->json(['status' => 'success', 'data' => $ret], 200)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    }

    protected function responseRequestError($message = 'Bad request', $statusCode = 200)
    {
        return response()->json(['status' => 'error', 'error' => $message], $statusCode)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    }

    //
}
