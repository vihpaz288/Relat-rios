<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <title>Login</title>
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
    <div class="content">
        <div class="form">
            @if ($errors->any())
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <div>
                        @foreach ($errors->all() as $error)
                            <li class="error">{{ $error }}</li>
                        @endforeach
                    </div>
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div>
                <h2>Login</h2>
            </div>
            <div>
                <form action="{{ route('logar') }}" method="POST">
                    @csrf
                    <div>
                        <label for="">Email</label>
                        <div class="box-input">
                            <input type="email" name="email" id="email">
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
            <a href="{{ route('create.usuario') }}">Ainda não tem conta?</a>
        </div>
    </div>
</body>
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}

</html>
