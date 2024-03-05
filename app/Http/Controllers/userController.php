<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFormRequest;
use App\Models\Relatorio;
use App\Models\Topico;
use Illuminate\Http\Request;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $topicos = Topico::where('user_id', $user->id)->get();
        $totalRelatorios = Relatorio::where('user_id', $user->id)->count();
        $relatoriosFeitos = Relatorio::where('situacao', 'concluido')->where('user_id', $user->id)->count();
        $relatoriosFaltando = Relatorio::whereNull('situacao')->where('user_id', $user->id)->count();
        $relatoriosAtrasados = Relatorio::where('tempo', '<', now())->where('user_id', $user->id)->count();

        $relatorios = Relatorio::where('user_id', $user->id)->get();
        foreach ($relatorios as $relatorio) {
            $tempoFinal = Carbon::parse($relatorio->tempo);
            if ($tempoFinal->isPast() && $relatorio->situacao == null) {
                $relatorio->prazo = 'Em atraso';
            }
        }
        return view('User.index', compact('relatorios', 'totalRelatorios', 'relatoriosFeitos', 'relatoriosFaltando', 'relatoriosAtrasados'));
    }

    public function create()
    {
        return view('User.create');
    }
    public function store(CreateFormRequest $request)
    {
        $request['password'] = Hash::make($request->password);
        User::create($request->all());
        Toastr::success('Cadastrado realizado com sucesso!', 'sucesso', ["positionClass" => "toast-bottom-right"]);
        return redirect()->route('login');
    }
    public function login()
    {
        return view('User.login');
    }
    public function logar(Request $request)
    {
        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('index');
        } else {
            Toastr::error('Dados incorretos', 'Erro', ["positionClass" => "toast-bottom-right"]);
            return redirect()->route('login');
        }
    }
    public function sair()
    {
        Auth::logout();
        return view('User.login');
    }
}
