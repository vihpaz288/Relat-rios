<?php

namespace App\Http\Controllers;

use App\Http\Requests\topicoCreateFormRequest;
use App\Models\Topico;
use Brian2694\Toastr\Facades\Toastr;

class topicoController extends Controller
{
    public function create()
    {
        return view('Topico.create');
    }
    public function store(topicoCreateFormRequest $request)
    {
        $userId = auth()->id();
        $Topico = new Topico();
        $Topico->user_id = $userId;
        $Topico->titulo = $request->titulo;
        $Topico->save();
        Toastr::success('Tópico cadastrado com sucesso!', 'sucesso', ["positionClass" => "toast-bottom-right"]);
        return redirect()->route('index');
    }
}
