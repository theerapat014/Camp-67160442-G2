<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    //
    private function insert_db(){
        $flights =new Flight();
        $flights -> name ="Test Flight";
        $flights-> airline = "Test Airline";
        $flights -> number_of_planes = 10;
        $flights -> price_per_ticket = 50;
        $flights -> save();
    }
    private function update_db(){
        $flights =Flight::find(1);
        $flights -> name ="Updated Flight";
        $flights -> save();
    }
    private function delete_db(){
        $flights =Flight::find(1);
        $flights -> delete();
    }
    public function index(){
        //$this->insert_db();
        //$this->update_db();
        //$this->delete_db();
        $data['Flights'] = Flight::all();
        return view('Flight.index', $data);
    }
    public function store(Request $request){
        $flights =new Flight();
        $flights -> name =request("name");
        $flights-> airline = request("airline");
        $flights -> number_of_planes = request("number_of_planes");
        $flights -> price_per_ticket = request("price_per_ticket");
        $flights -> save();
        return redirect('/Flights');
    }
}
