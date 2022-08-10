<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class BusinessProcessModelController extends Controller
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
        $category = Category::create($request->all());

        return response()->json($category, 201);
    }



    //
}
