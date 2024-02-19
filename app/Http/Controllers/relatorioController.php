<?php

namespace App\Http\Controllers;

use App\Models\Relatorio;
use App\Models\Topico;
use Illuminate\Http\Request;

class relatorioController extends Controller
{

    public function create()
    {
        $topicos = Topico::all();
        return view ('Relatorio.create', compact('topicos'));
    }
    public function store(Request $request)
    {

        $relatorio = Relatorio::create($request->all());
        $topicos = Topico::find($relatorio->topico_id);
        return redirect()->route('index');
    }
    public function concluido()
    {
        return view ('Relatorio.finalizado');
    }
    public function falta()
    {
        return view ('Relatorio.falta');
    }
}
