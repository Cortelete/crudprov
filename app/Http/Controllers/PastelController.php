<?php

namespace App\Http\Controllers;

use App\Models\Pastel;
use App\Models\Acompanhamento;
use Illuminate\Http\Request;

class PastelController extends Controller
{
    public function index()
    {
        $pasteis = Pastel::all(); // Use o 'all()' se você não estiver usando relacionamento com Acompanhamento
        return view('pasteis.index', compact('pasteis'));
    }
    
    public function create()
    {
        $acompanhamentos = Acompanhamento::all();
        return view('pasteis.create', compact('acompanhamentos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'sabor' => 'required|string|max:255',
            'tamanho' => 'required|string|max:50',
            'acompanhamento_id' => 'nullable|exists:acompanhamentos,id',
        ]);

        Pastel::create([
            'sabor' => $request->sabor,
            'tamanho' => $request->tamanho,
            'acompanhamento_id' => $request->acompanhamento_id,
        ]);

        return redirect()->route('pasteis.index');
    }

    public function edit($id)
    {
        $pastel = Pastel::findOrFail($id);
        $acompanhamentos = Acompanhamento::all();
        return view('pasteis.edit', compact('pastel', 'acompanhamentos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'sabor' => 'required|string|max:255',
            'tamanho' => 'required|string|max:50',
            'acompanhamento_id' => 'nullable|exists:acompanhamentos,id',
        ]);

        $pastel = Pastel::findOrFail($id);
        $pastel->update([
            'sabor' => $request->sabor,
            'tamanho' => $request->tamanho,
            'acompanhamento_id' => $request->acompanhamento_id,
        ]);

        return redirect()->route('pasteis.index');
    }

    public function destroy($id)
    {
        $pastel = Pastel::findOrFail($id);
        $pastel->delete();

        return redirect()->route('pasteis.index');
    }
}
