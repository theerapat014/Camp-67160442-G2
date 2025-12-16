<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Info extends Controller
{
    public function index()
    {
        return view('info.index');
    }
    public function store(Request $request)
    {
        $data['username'] = $request->input('username');
        $data['email'] = $request->input('email');
        return view('info.store', $data);
    }
    //
}
