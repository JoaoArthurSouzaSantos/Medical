<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    public function index()
    {
        $pacientes = Paciente::all();
        return view('pacientes.index', compact('pacientes'));
    }

    public function create()
    {
        return view('pacientes.create');
    }

    public function store(Request $request)
    {
        Paciente::create($request->all());
        return redirect()->route('pacientes.index')->with('success', 'Paciente criado com sucesso.');
    }

    public function show($id)
    {
        $paciente = Paciente::findOrFail($id);
        return view('pacientes.show', compact('paciente'));
    }

    public function edit($id)
    {
        $paciente = Paciente::findOrFail($id);
        return view('pacientes.edit', compact('paciente'));
    }

    public function update(Request $request, $id)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->update($request->all());
        return redirect()->route('pacientes.index')->with('success', 'Paciente atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->delete();
        return redirect()->route('pacientes.index')->with('success', 'Paciente removido com sucesso.');
    }
}
