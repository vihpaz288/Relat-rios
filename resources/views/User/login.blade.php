<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
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
    {{-- <form class="row g-3">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">nome</label>
          <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Data de nascimento</label>
          <input type="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Email</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>

        <div class="col-md-6">
          <label for="inputCity" class="form-label">Senha</label>
          <input type="text" class="form-control" id="inputCity">
        </div>

        <div class="col-12">
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
      </form> --}}
    <div class="content">
        <div class="form">
            <div>
                <h2>Login</h2>
            </div>
            <div>
                <form action="{{route('logar')}}" method="POST" >
                    @csrf
                    <div>
                        <label for="">Email</label>
                        <div class="box-input">
                            <input type="email" name="name" id="email">

                        </div>
                    </div>
                    <div>
                        <label for="">Senha</label>
                        <div class="box-input">
                            <input type="password" name="password">
                        </div>
                    </div>
                    <button type="submit">Entrar</button>
                </form>
            </div>

            <a href="{{route('create.usuario')}}">Ainda não tem conta?</a>
        </div>
    </div>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script> --}}
</body>

</html>
