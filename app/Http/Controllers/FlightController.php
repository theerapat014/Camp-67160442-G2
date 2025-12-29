<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use PhpParser\Node\Expr\Cast\String_;

class FlightController extends Controller
{
    //

    public function index()
    {
        //$this->insert_db();
        //$this->update_db();
        //$this->delete_db();
        $data['Flights'] = Flight::all();
        return view('Flight.index', $data);
    }
    public function store(Request $request)
    {
        $flights = new Flight();
        $flights->name = request("name");
        $flights->airline = request("airline");
        $flights->number_of_planes = request("number_of_planes");
        $flights->price_per_ticket = request("price_per_ticket");
        $flights->save();
        return redirect('/Flights');
    }
    public function update(Request $request, string $id)
    {
        $flights = Flight::find($id);
        $flights->name = request("name");
        $flights->airline = request("airline");
        $flights->number_of_planes = request("number_of_planes");
        $flights->price_per_ticket = request("price_per_ticket");
        $flights->save();
        return redirect('/Flights');

    }
    public function edit(string $id)
    {
        $data['Flight_update'] = Flight::find($id);
        $data['Fligths'] = Flight::all();
        return view('Flight.update');
    }
}
