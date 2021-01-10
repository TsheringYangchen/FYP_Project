<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\providers;


class providersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('providers');

    }


    public function create()
    {
    }



    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'user' => 'required',
            'occupation' => 'required',

        ]);
        $providers = new providers([
            'name' => $request->get('name'),
            'user' => $request->get('user'),
            'occupation' => $request->get('occupation'),
        ]);

        $providers->save();
        return redirect()->route('providers')->with('success','Data Added');
    }


    public function show($id)
    {
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
