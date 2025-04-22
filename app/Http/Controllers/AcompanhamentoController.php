<?php

namespace App\Http\Controllers;

use App\Models\Acompanhamento;
use Illuminate\Http\Request;

class AcompanhamentoController extends Controller
{
    public function index()
    {
        $acompanhamentos = Acompanhamento::all();
        return view('acompanhamentos.index', compact('acompanhamentos'));
    }

    public function create()
    {
        return view('acompanhamentos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        Acompanhamento::create([
            'nome' => $request->nome,
        ]);

        return redirect()->route('acompanhamentos.index');
    }

    public function edit($id)
    {
        $acompanhamento = Acompanhamento::findOrFail($id);
        return view('acompanhamentos.edit', compact('acompanhamento'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $acompanhamento = Acompanhamento::findOrFail($id);
        $acompanhamento->update([
            'nome' => $request->nome,
        ]);

        return redirect()->route('acompanhamentos.index');
    }

    public function destroy($id)
    {
        $acompanhamento = Acompanhamento::findOrFail($id);
        $acompanhamento->delete();

        return redirect()->route('acompanhamentos.index');
    }
}
