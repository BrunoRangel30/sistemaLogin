<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #000000
        }
        
        .top-login {
            margin-top: 115px;
        }
        
        .box-form {
            width: 43%;
            border-radius: 30px;
            background-color:#ffffff;
        }
        
        .itens-form {
            margin-right: auto;
            margin-left: auto;
            display: block;
            padding-top: 20px;
            width: 80%;
            margin-bottom: 40px;
           /* border: 2px solid pink*/
        }
        
        .cabecalho-login {
            text-align: center;
        }
        
        .cabecalho-login i {
            font-size: 5em;
        }
        
        .botoes-cabecalho {
            display: inline-flex;
            width: 100%;
            text-align: center;
        }
        .botoes-cabecalho .btn-primary {
            color: #7a7a7a;
            background-color: #ffffff;
           /* border-color: #ffffff;*/
        }
        
        .bt-1 {
            width: 50%;
            border-right: 2px solid #3cdd80;
        }
        
        .bt-2 {
            width: 50%;
        }
        .botao-entrar{
            position: relative;
        }
        .botao-entrar .btn-primary{
            background-color: #3cdd80;
            border-color: #3cdd80;
        }
        .botao-entrar .btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show>.btn-primary.dropdown-toggle {
            color: #fff;
            background-color: #3cdd80;
            border-color: #3cdd80;
        }
        .botao-entrar .btn-primary.focus, .btn-primary:focus {
            box-shadow: 0 0 0 0.2rem #3cdd80;
        }
        .botao-entrar .btn-primary:not(:disabled):not(.disabled).active:focus, .btn-primary:not(:disabled):not(.disabled):active:focus, .show>.btn-primary.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem #3cdd80;
        }
        .titulo-login{
            text-transform:uppercase;
        }
        @media all and (max-width: 900px) {
            .box-form {
                width: 100% !important;
                /*border: 2px solid red*/
            }
            .top-login {
                margin-top: 150px !important;
               /* border: 2px solid yellowgreen;*/
            }
            .bt-1 {
                width: 40%;
            }
            .bt-2 {
                width: 40%;
            }
        }
    </style>
</head>

<body class="antialiased">
    <div class="container top-login">
        <div class="row">
            <div class="col-md-12">
                <div style="display:block; margin-left:auto; margin-right:auto;" class="mt-5 mb-5 box-form">
                    <div class="cabecalho-login pt-3">
                        <i style="color:#3cdd80" class="fas fa-circle"></i>
                        <h2 class="pt-3 titulo-login">bem vindo</h2>
                    </div>
                    @if($errors->any())
                    <div class="alert alert-danger" style="text-align: center;">
                        <ul>
                            @foreach ($errors->all() as $item)
                            <li style="list-style-type: none">{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="itens-form" style="height: 48vh">
                        <form method="post" action="{{ route('auth.user') }}">
                            @csrf
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group pb-3">
                                <label for="exampleInputEmail1">E-mail</label>
                                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Endereço de e-mail">
                                <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                            </div>
                            <div class="form-group mt-3">
                                <label for="exampleInputPassword1">Senha</label>
                                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha">
                            </div>
                            <div class="botao-entrar pt-3">
                                <i style="position:absolute;margin-top:25px; margin-left:20px;color:#fff"class="fas fa-lock"></i>
                                <button style="width:100%;" type="submit" class="btn btn-primary pt-2 pb-2 mt-3">Entrar</button>
                            </div>
                        </form>
                        <div class="botoes-cabecalho pt-4">
                            <div class="bt-1">
                                <a><button    class="btn btn-primary pb-0 pt-0"><b>Criar Conta</b></button></a>
                            </div>
                            <div class="bt-2">
                                <a><button    class="btn btn-primary  pb-0 pt-0"><b>Recuperar Senha</b></button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>