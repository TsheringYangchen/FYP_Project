<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class applicants extends Controller
{
    public function index(){
        return view('applicants');
    }
}
