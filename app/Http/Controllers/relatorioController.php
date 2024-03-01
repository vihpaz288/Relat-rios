<?php

namespace App\Http\Controllers;

use App\Http\Requests\relatorioCreateFormRequest;
use App\Models\Relatorio;
use App\Models\Topico;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use PDF;

class relatorioController extends Controller
{
    public function create()
    {
        $user = auth()->user();
        $topicos = Topico::where('user_id', $user->id)->get();
        return view('Relatorio.create', compact('topicos'));
    }
    public function store(relatorioCreateFormRequest $request)
    {
        $userId = auth()->id();
        $relatorio = new Relatorio();
        $relatorio->user_id = $userId;
        $relatorio->topico_id = $request->topico_id;
        $relatorio->titulo = $request->titulo;
        $relatorio->tempo = $request->tempo;
        $relatorio->descrição = $request->descrição;
        $relatorio->save();
        Toastr::success('Relatório criado com sucesso!', 'sucesso', ["positionClass" => "toast-bottom-right"]);
        return redirect()->route('index');
    }
    public function edit(Request $request, $id)
    {
        $relatorio = Relatorio::findOrFail($id);
        $relatorio->situacao = 'concluido';
        $relatorio->save();
        Toastr::success('Relatório concluído com sucesso!', 'sucesso', ["positionClass" => "toast-bottom-right"]);
        return redirect()->route('index');
    }
    public function falta()
    {
        $user = auth()->user();
        $faltas = Relatorio::where('situacao', null)->where('user_id', $user->id)->get();
        return view('Relatorio.falta', compact('faltas'));
    }
    public function pdfFalta()
    {
        $user = auth()->user();
        $faltas = Relatorio::where('user_id', $user->id)->where('situacao', null)->get();
        $dataAtual = date('d-m-Y H:i:s');
        $pdf = PDF::loadView('Relatorio.pdfFalta', compact('faltas', 'dataAtual'));
        return $pdf->setPaper('a4')->stream('documento_falta');
    }
    public function detalhes($id)
    {
        $detalhes = Relatorio::find($id);
        return view('Relatorio.detalhes', compact('detalhes'));
    }
    public function concluidos()
    {
        $user = auth()->user();
        $concluidos = Relatorio::where('situacao', 'concluido')->where('user_id', $user->id)->get();
        return view('Relatorio.concluido', compact('concluidos'));
    }
    public function pdfConcluido()
    {
        $user = auth()->user();
        $concluidos = Relatorio::where('user_id', $user->id)->where('situacao', 'concluido')->get();
        $dataAtual = date('d-m-Y H:i:s');
        $pdf = PDF::loadView('Relatorio.pdfConcluido', compact('concluidos', 'dataAtual'));
        return $pdf->setPaper('a4')->stream('documento_concluido');
    }
    public function destroy($id)
    {
        Relatorio::findOrFail($id)->delete();
        Toastr::success('Relatório deletado com sucesso!', 'sucesso', ["positionClass" => "toast-bottom-right"]);
        return redirect()->route('index');
    }
}
