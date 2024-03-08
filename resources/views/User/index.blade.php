<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .navbar {
            background-color: rosybrown;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 5px 5px 1px rgb(211, 181, 181);
            padding: 5px 30px;
        }

        .navbar-title {
            font-family: "Pacifico", cursive;
            font-weight: 400;
            font-style: normal;
            font-size: 30px;
            letter-spacing: 5px;
        }

        .navbar-menu-toggle {
            font-size: 24px;
            cursor: pointer;
        }

        .navbar-menu {
            display: none;
            position: absolute;
            top: 60px;
            right: 10px;
            background-color: rosybrown;
            padding: 10px;
            border-radius: 4px;
            box-shadow: 5px 5px 1px rgb(211, 181, 181);
        }

        .navbar-menu ul {
            list-style-type: none;
            padding: 0;
        }

        .navbar-menu ul li {
            margin-bottom: 5px;
        }

        .navbar-menu ul li a {
            color: #fff;
            text-decoration: none;
        }

        .content {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #000000;
            color: #ffffff;
        }

        button {
            margin-top: 20px;
            background-color: rosybrown;
            border: none;
            outline: none;
            border-radius: 10px;
            padding: 8px;
            color: #ffffff;
            transition: .1s all;
            letter-spacing: 1px;
        }

        button:hover {
            background-color: rgb(196, 164, 164);
            cursor: pointer;
            transform: scale(1.05);
        }

        .form {
            border: 3px solid rosybrown;
            text-align: center;
            padding: 15px 30px;
            border-radius: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 30px;
            box-shadow: 5px 5px 1px rgb(211, 181, 181);

            & form {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                gap: 5px;
            }

            & h2 {
                font-size: 1.7rem;
            }

            & a {
                text-decoration: none;
                color: #ffffff;
                transition: .1s all;
            }

            & a:hover {
                color: #cfcfcf;
                transform: translateY(5%);
            }

            td,
            tr,
            th {
                padding: 10px;
            }

            .icon-container {
                position: relative;
                display: inline-block;
            }

            .icon-label {
                visibility: hidden;
                width: 120px;
                background-color: black;
                color: white;
                text-align: center;
                border-radius: 6px;
                padding: 5px 0;
                position: absolute;
                z-index: 1;
                bottom: 100%;
                left: 50%;
                margin-left: -60px;
                opacity: 0;
                transition: opacity 0.3s;
            }

            .icon-container:hover .icon-label {
                visibility: visible;
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="navbar-title">Controle de relatórios</div>
        <div class="navbar-menu-toggle" onclick="toggleMenu()">☰</div>
        <div class="navbar-menu">
            <ul>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                </svg> {{ Auth::user()->name }}
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
                    </svg>
                    <a href="{{ route('create.topico') }}">Novo tópico</a>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
                    </svg>
                    <a href="{{ route('create.relatorio') }}">Novo relatório</a>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </svg>
                    <a href="{{ route('concluidos') }}">Relatórios concluídos</a>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z" />
                    </svg>
                    <a href="{{ route('teste.falta') }}">Relatórios não concluídos</a>
                </li>
                <li class="sair">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                    </svg>
                    <a href="{{ route('sair') }}">Sair</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="content">
        @if (count($relatorios) <= 0)
            <h2>
                Você ainda não possui relatórios cadastrados.
            </h2>
        @else
            <div class="form">
                @if ($errors->any())
                    <h4>{{ $errors->first() }}</h4>
                @endif
                <div>
                    <h2>Lista de todos os relatórios</h2>
                    <div class="icon-container">

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" data-bs-whatever="@fat"
                            style="background-color: rosybrown; border: none;">Ver gráfico</button>
                        <span class="icon-label">Quantidade total de relatórios cadastrados, quantos a fazer, em atraso
                            e concluídos.</span>
                    </div>
                </div>
                <div>
                    <table border="1" class="tabela">
                        <thead>
                            <tr>
                                <th>Tópico</th>
                                <th>Título relatorio</th>
                                <th>Situação</th>
                                <th>Tempo final</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($relatorios as $relatorio)
                                <tr>
                                    <td>{{ $relatorio->topico->titulo }}</td>
                                    <td>{{ $relatorio->titulo }}</td>
                                    <td>
                                        @if ($relatorio->verificaPrazo() == 1)
                                            <div class="icon-container">
                                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" class="bi bi-check-circle-fill "
                                                    viewBox="0 0 16 16" style="color: #149c44">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                </svg>
                                                <span class="icon-label">Relatório concluído.</span>
                                            </div>
                                        @elseif($relatorio->verificaPrazo() == 2)
                                            <div class="icon-container">
                                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor"
                                                    class="bi bi-exclamation-circle-fill text-warning"
                                                    viewBox="0 0 16 16" style="color: #d4c757">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4m.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2" />
                                                </svg>
                                                <span class="icon-label">Relatório em atraso.</span>
                                            </div>
                                        @elseif($relatorio->verificaPrazo() == 3)
                                            <div class="icon-container">
                                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor"
                                                    class="bi bi-x-circle-fill text-danger  " viewBox="0 0 16 16"
                                                    style="color: #990e0e">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z" />
                                                </svg>
                                                <span class="icon-label">Relatório para fazer, dentro do
                                                    prazo.</span>
                                            </div>
                                        @endif
                                    </td>
                                    <td>
                                        {{ $relatorio->tempo }}
                                    </td>
                                    <td>
                                        <div class="icon-container">
                                            <a href="{{ route('detalhes', $relatorio->id) }}">
                                                <Button class="icon" type="submit">Detalhes</Button>
                                            </a>
                                            <span class="icon-label">Ver descrição do relatório.</span>
                                        </div>
                                    </td>
                                    <td>
                                        @if ($relatorio->situacao == null)
                                            <div class="icon-container">
                                                <form action="{{ route('edit', $relatorio->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <Button class="icon" type="submit">Concluido</Button>
                                                </form>
                                                <span class="icon-label">Ao concluir o relatório, aqui marca como
                                                    concluído.</span>
                                            </div>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($relatorio->situacao == null)
                                            <div class="icon-container">
                                                <form action="{{ route('destroy', $relatorio->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <Button class="icon" type="submit"
                                                        onclick="return confirm('Tem certeza que deseja apagar?')">Deletar</button>
                                                    <span class="icon-label">Caso o relatório não precise ser
                                                        realizado, aqui deleta.</span>
                                                </form>
                                            </div>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
        @endif
    </div>
    </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Gráfico de relátorios</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <p>Dados dos relátorios cadastrados</p>
                            <canvas id="myChart" height=10vh" width="30vw"></canvas>
                        </div>
                        <div class="col-6">
                            <p>Dados dos tópicos cadastrados</p>
                            <canvas id="myChart2"></canvas>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');
        new Chart(ctx, {
            type: 'polarArea',
            data: {
                labels: ['Feitos', 'Faltando', 'Atrasados'],
                datasets: [{
                    label: 'Relatórios',
                    data: [{{ $relatoriosFeitos }}, {{ $relatoriosFaltando }},
                        {{ $relatoriosAtrasados }}
                    ],
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 205, 86, 1)',
                    ],
                    borderWidth: 1,
                }]
            },
            options: {}
        });
        const ctx2 = document.getElementById('myChart2');
        const topicosData = {!! json_encode($topicosQuantidade) !!};
        const labels = [];
        const data = [];
        const backgroundColor = [];
        const borderColor = [];
        topicosData.forEach(item => {
            labels.push(item.titulo);
            data.push(item.quantidade);
            backgroundColor.push('rgba(75, 192, 192, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 205, 86, 0.2)', );
            borderColor.push('rgba(75, 192, 192, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 205, 86, 1)', );
        });
        new Chart(ctx2, {
            type: 'polarArea',
            data: {
                labels: labels,
                datasets: [{
                    label: '',
                    data: data,
                    backgroundColor: backgroundColor,
                    borderColor: borderColor,
                    borderWidth: 1
                }]
            },
            options: {}
        });
    </script>
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
    <script>
        function toggleMenu() {
            var menu = document.querySelector('.navbar-menu');
            menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
        }
    </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
