<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de topico</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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
            padding: 15px 30px;
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
                <h2>Cadastro de tópico</h2>
            </div>
            <div>
                <form action="{{route('store.topico')}}" method="POST" >
                    @csrf
                    <div>
                        <label for="">Nome</label>
                        <div class="box-input">
                            <input type="text" name="titulo" id="">
                        </div>
                    </div>

                    <button type="submit">Cadastrar</button>
                </form>
            </div>
            {{-- <i class="bi bi-arrow-left-circle-fill"></i> --}}
            <a href="{{route('login')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
              </svg>
            </a>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>
