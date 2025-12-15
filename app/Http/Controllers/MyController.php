<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function myFunction() {
        return view('Mycontroller.index'); ;
    }
    function index() {

        return $this->myFunction();
    }
    function process(Request $request) {
        $data['mynum'] = $request->input('num');
        return view('Mycontroller.process', $data);
    }
}
