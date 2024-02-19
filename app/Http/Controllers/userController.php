<?php

namespace App\Http\Controllers;

use App\Models\Relatorio;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function index()
    {
        $relatorios = Relatorio::all();
        return view('User.index', compact('relatorios'));
    }
    public function create()
    {
        return view('User.create');
    }
    public function store(Request $request)
    {
        $request['password'] = Hash::make($request->password);
        User::create($request->all());
        return redirect()->route('login');
    }
    public function login()
    {
        return view('User.login');
    }
    public function logar(Request $request)
    {
        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credenciais)) {
            $request->session()->regenerate();
            return redirect()->intended('index');
        }
        return redirect()->back();
        // if(auth()->attempt(['email' => $request->email, 'password'=>$request->password])){
        //     return redirect()->route('index');

        // }
    }
}
