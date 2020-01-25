<?php

namespace App\Http\Controllers\CRUDPlanetController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UPlanetController extends Controller
{
    
    public function updateresponse(Request $request)
    {   
        return view('crudresponse/updateresponse',compact('request'));
    }
    
    public function update()
    {
        return view('crud/update');
    }
}
