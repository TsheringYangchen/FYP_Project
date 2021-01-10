<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LicenseHolder extends Controller
{
    public function index(Request $request){
        $type1 = $request->r;
        return view('licenseholders')->with('type1', $type1);
    }
}
