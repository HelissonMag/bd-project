<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class LoginController extends Controller
{
    
    public function loginresponse (Request $request)
    {
        return view('loginresponse',compact('request'));
    }

}
