<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TemporaryFile;

class UploadController extends Controller
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

    public function store(Request $request)
    {
        if ($request->hasFile('files')) {
            $file = $request->file('files');
            $filename = time() . $file->getClientOriginalName();
            $folder = uniqid() . '-' . time();
            $file->move('ConstituentProcess', $filename);

            return $filename;
        }
        return '';
    }
}
