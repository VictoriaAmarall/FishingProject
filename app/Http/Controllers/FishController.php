<?php

namespace App\Http\Controllers;

use App\Models\Fish;
use Illuminate\Http\Request;

class FishController extends Controller
{
    public function create(){//retorna view com formulario
        return view('fish.create');
    }
    public function store(Request $request){//armazena o fisho insere no banco de dados
        fish::create($request->all());
        return redirect ("/fish");
    }
    public function index(){
        $fishes = Fish::all();
        return view('fish.index', compact('fishes'));
    }
    public function edit(fish $fish){
        return view('fish.edit', compact('fish'));
    } 
    public function update(fish $fish, Request $request){
        $fish->update($request->all());
        return redirect("/fish");
    }

    public function destroy (fish $fish){//para apagar fisho
        $fish-> delete();
        return redirect ('/fish');
    }
}
