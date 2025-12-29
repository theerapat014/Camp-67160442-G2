<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pokedexs;
class PokedexsController extends Controller
{
    public function index()
    {
        $data['pokedexs'] = \App\Models\pokedexs::all();
        return view('Pokedexs.index', $data);
    }
    public function store(Request $request){
        $pokedexs = new pokedexs();
        $pokedexs->name = request("name");
        $pokedexs->type = request("type");
        $pokedexs->species = request("species");
        $pokedexs->height = request("height");
        $pokedexs->weight = request("weight");
        $pokedexs->hp = request("hp");
        $pokedexs->attack = request("attack");
        $pokedexs->defense = request("defense");
        $pokedexs->image_url = request("image_url");
        $pokedexs->save();

        return redirect('/pokedexs');
    }
    public function edit(Request $request, string $id){
        $data['pokedexs_update'] = pokedexs::find($id);
        $data['pokedexs'] = pokedexs::all();

        return view('Pokedexs.edit', $data);
    }
    public function update(Request $request, string $id){
        $pokedexs = pokedexs::find($id);
        $pokedexs->name = $request->input('name');
        $pokedexs->type = $request->input('type');
        $pokedexs->species = $request->input('species');
        $pokedexs->height = $request->input('height');
        $pokedexs->weight = $request->input('weight');
        $pokedexs->hp = $request->input('hp');
        $pokedexs->attack = $request->input('attack');
        $pokedexs->defense = $request->input('defense');
        $pokedexs->image_url = $request->input('image_url');
        $pokedexs->save();
        return redirect('/pokedexs');
    }
    public function destroy(Request $request, string $id){
        $pokedexs = pokedexs::find($id);
        $pokedexs->delete();
        return redirect('/pokedexs');
    }
}
