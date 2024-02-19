<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topico;

class topicoController extends Controller
{
    public function create()
    {
        return view('Topico.create');
    }
    public function store(Request $request)
    {
        Topico::create($request->all());
        return redirect()->route('index');
    }
}
