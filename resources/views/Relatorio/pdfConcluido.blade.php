<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF concluídos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        p {
            color: #666;
            line-height: 1.5;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Relatórios concluídos</h1>
    <p>Aqui temos a lista de todos relatórios concluídos, com qual tópico, título, descrição, e a data que estava
        prevista, seja ele em atraso ou concluídos em dia.</p>
    <table>
        <tr>
            <th>Tópico</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Prazo final</th>
        </tr>
        @foreach ($concluidos as $concluido)
            <tr>
                <td>{{ $concluido->topico->titulo }}</td>
                <td>{{ $concluido->titulo }}</td>
                <td>{{ $concluido->descrição }}</td>
                <td>{{ $concluido->tempo }}</td>
            </tr>
        @endforeach
    </table>
    <p>Relatorio gerado em: {{ $dataAtual }}</p>
</body>

</html>
