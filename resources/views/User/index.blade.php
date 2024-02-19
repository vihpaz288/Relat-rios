<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<style>
 * {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .content {
            text-align: center;
            align-items: center;
            justify-content: center;
        }
        .table {
              text-align: center;
              justify-content: center;
              align-items: center;
        }
        .tabela, th, td{
        border-collapse:collapse;
        border: 2px solid rosybrown;
        padding: 10px;
        text-align: center;
        align-items: center;
        justify-content: center;
    }
</style>
<body>
<div class="content">
    <div class="nav">
        <a href="{{route('create.topico')}}">Cadastrar topico</a>
        <a href="{{route('create.relatorio')}}">Cadastrar relatorio</a>
        <a href="{{route('concluidos')}}">Relatorios concluidos</a>
        <a href="{{route('falta')}}">Relatorios não concluidos</a>
    </div>
    <table border="1" class="tabela">
        <thead>
            <tr>
                <th>Topico</th>
                <th>Titulo relatorio</th>
                <th>Opção ver</th>
                <th>Situação</th>
                <th>Opção NÃO CONCLUIDA Marca como concluida</th>
                <th>Opção NÃO CONCLUIDA como deletar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($relatorios as $relatorio)

            <tr>
                <td>{{$relatorio->topico->titulo}}</td>
                <td>{{$relatorio->titulo}}</td>
                <td>
                    <Button>Detalhes</Button>
                </td>
                <td>@if ($relatorio->situacao == null)
                    falta
                    @else
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                      </svg>
                @endif</td>
                <td> @if ($relatorio->situacao == null)
                    <Button>Concluido</Button>
                    @endif
                </td>
                <td>@if ($relatorio->situacao == null)
                    <Button>deletar</Button>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
