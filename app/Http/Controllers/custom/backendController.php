<?php

namespace App\Http\Controllers\custom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\POS;

class backendController extends Controller
{
    public function backend(){
        $data=Pos::latest()->get();
        return view('backend.dashboard',compact('data'));

        //return('welcome to backend page');
    }
}
