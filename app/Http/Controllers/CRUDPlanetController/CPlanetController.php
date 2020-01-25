<?php

namespace App\Http\Controllers\CRUDPlanetController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CPlanetController extends Controller
{
    
    public function createresponse(Request $request)
    {

        return view('crudresponse/createresponse',compact('request'));
    }

    public function create()
    {
        return view('crud/create');
    }
    
}
