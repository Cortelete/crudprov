<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Pastel;
use App\Models\Acompanhamento;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function create()
    {
        $pasteis = Pastel::all();
        $acompanhamentos = Acompanhamento::all();
        return view('combo', compact('pasteis', 'acompanhamentos'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'pastel_id' => 'required|exists:pasteis,id',
            'acompanhamento_id' => 'required|exists:acompanhamentos,id',
        ]);
    
        Pedido::create($request->all());
    
        return redirect()->route('pedidos.index')->with('success', 'Pedido registrado com sucesso!');
    }
    
    public function index()
    {
        $pedidos = Pedido::with('pastel', 'acompanhamento')->get();
        return view('pedidos.index', compact('pedidos'));
    }
}
