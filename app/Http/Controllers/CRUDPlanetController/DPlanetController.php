<?php

namespace App\Http\Controllers\CRUDPlanetController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DPlanetController extends Controller
{
    
    public function deleteresponse(Request $request)
    {
        return view('crudresponse/deleteresponse',compact('request'));
    }

    public function delete()
    {
        return view('crud/delete');
    }
}
