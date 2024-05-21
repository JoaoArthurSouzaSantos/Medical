<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atendimento;

class AtendimentoController extends Controller
{
    public function index()
    {
        $atendimentos = Atendimento::all();
        return view('atendimentos.index', compact('atendimentos'));
    }

    public function create()
    {
        return view('atendimentos.create');
    }

    public function store(Request $request)
    {
        Atendimento::create($request->all());
        return redirect()->route('atendimentos.index')->with('success', 'Atendimento criado com sucesso.');
    }

    public function show($id)
    {
        $atendimento = Atendimento::findOrFail($id);
        return view('atendimentos.show', compact('atendimento'));
    }

    public function edit($id)
    {
        $atendimento = Atendimento::findOrFail($id);
        return view('atendimentos.edit', compact('atendimento'));
    }

    public function update(Request $request, $id)
    {
        $atendimento = Atendimento::findOrFail($id);
        $atendimento->update($request->all());
        return redirect()->route('atendimentos.index')->with('success', 'Atendimento atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $atendimento = Atendimento::findOrFail($id);
        $atendimento->delete();
        return redirect()->route('atendimentos.index')->with('success', 'Atendimento removido com sucesso.');
    }
}
