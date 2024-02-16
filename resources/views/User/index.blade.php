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
            /* width: 100vw;
            height: 100vh; */
            /* display: flex; */
            text-align: center;
            align-items: center;
            justify-content: center;
            /* background-color: #000000;
            color: #ffffff; */
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
        <a href="{{route('concluido')}}">Relatorios concluidos</a>
        <a href="{{route('falta')}}">Relatorios não concluidos</a>
    </div>
    <table border="1" class="tabela">
        <thead>
            <tr>
                <th>Topico</th>
                <th>Titulo relatorio</th>
                <th>Situação</th>
                <th>Opção ver</th>
                <th>Opção NÃO CONCLUIDA Marca como concluida</th>
                <th>Opção NÃO CONCLUIDA como deletar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Matematica</td>
                <td>Atividades</td>
                <td>Matematica</td>
                <td>Falta</td>
                <td>
                    <Button>Concluir</Button>
                </td>
                <td>
                    <button>Deletar</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</body>
</html>
