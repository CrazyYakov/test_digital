<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;

class RequestController extends Controller
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

    public function index(Request $request)
    {   
        if ($request->input('id')) {
            return ModelsRequest::find($request->input('id'));
        }

        return ModelsRequest::all();
    }

    public function store(Request $request)
    {
        if (! ($request->input('name') && $request->input('value'))) {
            return response(['message' => 'Bad Request'], 400);
        }

        $data = ['name' => $request->input('name'), 'value' => $request->input('value')];

        ModelsRequest::addRequest($data);
    }
}
