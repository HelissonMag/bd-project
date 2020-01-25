<?php

namespace App\Http\Controllers\CRUDPlanetController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RPlanetController extends Controller
{
    public function readresponse(Request $request)
    {
        return view('crudresponse/readresponse',compact('request'));
    }

    public function read()
    {
        return view('crud/read');
    }
}
