<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminsProfileController extends Controller
{
    //
    public function index(){
        return view('AdminsProfile.index');
    }
}
