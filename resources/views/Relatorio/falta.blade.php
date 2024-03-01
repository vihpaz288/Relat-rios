<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Falta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Satisfy&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .content {
            width: 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #000000;
            color: #ffffff;
        }

        .navbar {
            background-color: rosybrown;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            box-shadow: 5px 5px 1px rgb(211, 181, 181);
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

        }

        .form .box-input {
            padding: 10px;
            display: flex;
            justify-content: center;
            align-items: center;

            & input {
                padding: 5px 10px;
                border: 1px solid rosybrown;
                width: 100%;
                border-radius: 30px;
                outline: none;
            }
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="navbar-title">Controle de relatórios</div>
        <div class="navbar-menu-toggle" onclick="toggleMenu()">
            ☰
        </div>
        <div class="navbar-menu">
            <ul>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                </svg> {{ Auth::user()->name }}
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-house-fill" viewBox="0 0 16 16">
                        <path
                            d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                        <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z" />
                    </svg>
                    <a href="{{ route('index') }}">Inicio</a>
                </li>
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
        @if (count($faltas) <= 0)
            <h1>Não existe relatórios em falta</h1>
        @else
            <div class="form">
                <div>
                    <h2>Relatórios não concluídos</h2>
                    <a class="download" href="{{ route('pdfFalta') }}"> download
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-cloud-download-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 0a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 4.095 0 5.555 0 7.318 0 9.366 1.708 11 3.781 11H7.5V5.5a.5.5 0 0 1 1 0V11h4.188C14.502 11 16 9.57 16 7.773c0-1.636-1.242-2.969-2.834-3.194C12.923 1.999 10.69 0 8 0m-.354 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V11h-1v3.293l-2.146-2.147a.5.5 0 0 0-.708.708z" />
                        </svg>
                    </a>
                </div>
                <div>
                    <table border="1" class="tabela">
                        <thead>
                            <tr>
                                <th>Tópico</th>
                                <th>Título relatório</th>
                                <th>Descrição</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($faltas as $falta)
                                <tr>
                                    <td>{{ $falta->topico->titulo }}</td>
                                    <td>{{ $falta->titulo }}</td>
                                    <td>{{ $falta->descrição }}</td>
                                </tr>
                            @endforeach
        @endif
        </tbody>
        </table>
    </div>
    <a href="{{ route('index') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
            <path
                d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
        </svg>
    </a>
    </div>
    </div>
    <script>
        function toggleMenu() {
            var menu = document.querySelector('.navbar-menu');
            menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
