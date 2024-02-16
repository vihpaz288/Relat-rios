<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de relatorio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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

        button:hover{
            background-color: rgb(196, 164, 164);
            cursor: pointer;
            transform: scale(1.05);
        }

        .form {
            border: 3px solid rosybrown;
            text-align: center;
            padding: 15px 40px;
            border-radius: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 30px;
            box-shadow: 5px 5px 1px rgb(211, 181, 181);

            & form{
                display: flex;
                justify-content:center;
                align-items:center;
                flex-direction: column;
                gap: 5px;
            }

            & h2{
                font-size: 1.7rem;
            }

            & a{
                text-decoration: none;
                color: #ffffff;
                transition: .1s all;
            }

            & a:hover{
                color: #cfcfcf;
                transform: translateY(5%);
            }
        }

        .form .box-input{
            padding: 10px;
            display: flex;
            justify-content: center;
            align-items: center;

            & input{
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

    <div class="content">
        <div class="form">
            <div>
                <h2>Cadastro de relatorio</h2>
            </div>
            <div>
                <form action="">
                    <div>
                        <label for="">Titulo do relatório</label>
                        <div class="box-input">
                            <input type="text" name="" id="">
                        </div>
                    </div>
                    <div>
                        <label for="">Escolha o topico</label><br>
                        {{-- <div class="box-input">
                            <input type="email" name="" id="email">

                        </div> --}}
                        <input type="radio" name="" id="" > Teste


                    </div>

                    <div>
                        <label for="">Descrição de relatorio</label><br>

                        <textarea name="" id="" cols="25" rows="4"></textarea>

                    </div>
                    <button type="submit">Cadastrar</button>
                </form>
            </div>

            <a href="{{route('login')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
                  </svg>
                </a>        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
