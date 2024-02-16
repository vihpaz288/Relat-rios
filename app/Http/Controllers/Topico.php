<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class Topico extends Controller
{
    public function create()
    {
        return view('Topico.create');
    }
}
