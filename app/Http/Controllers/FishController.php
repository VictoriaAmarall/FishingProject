<?php

namespace App\Http\Controllers;

use App\Models\Fish;
use App\Models\Type;
use Illuminate\Http\Request;

class FishController extends Controller
{
    public function index()
    {
        $fishes = Fish::all();
        return view('fish.index', compact('fishes'));
    }

    public function create() // retorna view com formulário
    {
        $types = Type::all();
        return view('fish.create', compact('types'));
    }

    public function store(Request $request) // armazena o peixe no banco
    {
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'color'   => 'required|string|max:255',
            'type_id' => 'required|exists:types,id',
        ]);

        Fish::create($data);
        return redirect('/fish');
    }

    public function edit(Fish $fish)
    {
        $types = Type::all();
        return view('fish.edit', compact('fish', 'types'));
    }

    public function update(Request $request, Fish $fish)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'color'   => 'required|string|max:255',
            'type_id' => 'required|exists:types,id',
        ]);

        $fish->update($data);
        return redirect('/fish');
    }

    public function destroy(Fish $fish) // apaga o peixe
    {
        $fish->delete();
        return redirect('/fish');
    }
}