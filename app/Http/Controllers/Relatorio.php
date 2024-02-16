<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Relatorio extends Controller
{
    public function create()
    {
        return view ('Relatorio.create');
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
