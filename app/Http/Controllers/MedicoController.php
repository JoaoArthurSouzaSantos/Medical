<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medico;

class MedicoController extends Controller
{
    public function index()
    {
        $medicos = Medico::all();
        return view('medicos.index', compact('medicos'));
    }

    public function create()
    {
        return view('medicos.create');
    }

    public function store(Request $request)
    {
        Medico::create($request->all());
        return redirect()->route('medicos.index')->with('success', 'Médico criado com sucesso.');
    }

    public function show($id)
    {
        $medico = Medico::findOrFail($id);
        return view('medicos.show', compact('medico'));
    }

    public function edit($id)
    {
        $medico = Medico::findOrFail($id);
        return view('medicos.edit', compact('medico'));
    }

    public function update(Request $request, $id)
    {
        $medico = Medico::findOrFail($id);
        $medico->update($request->all());
        return redirect()->route('medicos.index')->with('success', 'Médico atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $medico = Medico::findOrFail($id);
        $medico->delete();
        return redirect()->route('medicos.index')->with('success', 'Médico removido com sucesso.');
    }
}
