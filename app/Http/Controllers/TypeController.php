<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::all();
        return view('type.index', compact('types'));
    }

    public function create() // retorna view com formulário
    {
        return view('type.create');
    }

    public function store(Request $request) // armazena o tipo no banco
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Type::create($data);
        return redirect('/type');
    }

    public function edit(Type $type)
    {
        return view('type.edit', compact('type'));
    }

    public function update(Request $request, Type $type)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $type->update($data);
        return redirect('/type');
    }

    public function destroy(Type $type) // apaga o tipo
    {
        $type->delete();
        return redirect('/type');
    }
}