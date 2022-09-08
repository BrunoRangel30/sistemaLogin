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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Styles -->
    <style>
        @font-face {
            font-family:GraphikBold;
            src: url("{{ asset('fontes/GraphikBold.otf')}}");
        }
        @font-face {
            font-family:GraphikRegular;
            src: url("{{ asset('fontes/GraphikRegular.otf')}}");
        }
       /* @font-face {
            font-family:GraphikThin;
            src: url("{{ asset('fontes/GraphikThin.otf')}}");
        }*/
        body {
            font-family: 'GraphikRegular';
            background-color: #000000;
        }
        .top-login {
            margin-top: 5px;
        }
        
        .box-form {
            width: 42%;
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
            height: 395px;
           /* border: 2px solid pink*/
        }
        .itens-form input {
            border: 1px solid #000000;
            border-radius: 10px;
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
            border-right: 2px solid #3cdd81;
        }
        
        .bt-2 {
            width: 50%;
        }
        .botao-entrar{
            position: relative;
        }
        .botao-entrar .btn-primary{
            background-color: #3cdd81;
            border-color: #3cdd81;
            border-radius: 10px;
        }
        /*retirar efeitos padrao*/
        .botao-entrar .btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show>.btn-primary.dropdown-toggle {
            color: #fff;
            background-color: #3cdd81;
            border-color: #3cdd81;
        }
        .botao-entrar .btn-primary.focus, .btn-primary:focus {
            box-shadow: 0 0 0 0.2rem #3cdd81;
        }
        .botao-entrar .btn-primary:not(:disabled):not(.disabled).active:focus, .btn-primary:not(:disabled):not(.disabled):active:focus, .show>.btn-primary.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem #3cdd81;
        }
        /*returar efeitos botoes inferioes*/
        .botoes-cabecalho .btn-primary {
            color: ##000000;
            background-color: #ffffff;
            border-color: #ffffff;
        }
        .botoes-cabecalho .btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show>.btn-primary.dropdown-toggle {
            color: ##000000;
            background-color: #ffffff;
            border-color: #ffffff;
        }
        .botoes-cabecalho .btn-primary.focus, .btn-primary:focus {
            box-shadow: 0 0 0 0.2rem #ffffff;
        }
        .botoes-cabecalho .btn-primary:not(:disabled):not(.disabled).active:focus, .btn-primary:not(:disabled):not(.disabled):active:focus, .show>.btn-primary.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem #ffffff;
        }
        .titulo-login{
            text-transform:uppercase;
            font-size: 1.5em;
            font-family: GraphikBold;
        }
        /*nav*/
        .config-nav{
           height: 110px;
           background-color: #000000 !important;
           border-bottom: 1px solid #3cdd81;
        }
        .config-nav .nav-item {
                margin-right: 30px;
        }
        .config-nav .nav-item a {
            color: #3cdd81 !important;
            font-size: 1.5em !important;
            text-transform:uppercase;
          /*  font-family:GraphikThin;*/
        }
        .config-nav .navbar-brand {
            font-size: 2.3em;
            text-transform:uppercase;
            margin-left: 15px;
        }
        .config-nav .pl-1{
            color:#3cdd81;
            font-family:GraphikBold;
        }
        .config-nav .pl-2{
            color: #fff;
             font-family:GraphikBold;
        }
        .config-nav .navbar-toggler{
           background-color: #fff !important;
        }
        .config-nav .navbar-collapse{
            margin-top: 10px;
            padding: 5px;
            z-index: 1;
            background-color: #000000 !important;
            border-radius: 10px;
        }
        @media all and (max-width: 900px) {
            .box-form {
                width: 100% !important;
                /*border: 2px solid red*/
            }
            .top-login {
                margin-top: 30px !important;
               /* border: 2px solid yellowgreen;*/
            }
            .bt-1 {
                width: 40%;
            }
            .bt-2 {
                width: 40%;
            }
            .config-nav .navbar-brand {
                font-size: 1.4em !important;
                text-transform:uppercase;
                margin-left: 5px;
            }
            .config-nav{
                height: 60px;
            }
            .config-nav .nav-item a {
                color: #3cdd81 !important;
                font-size: 1.2em !important;
                text-transform:uppercase;
                /*font-family:GraphikThin;*/
            }
        }
    </style>
</head>

<body class="antialiased">
     <section class="menu">
         @component('componentes.menu2')@endcomponent
     </section>
     <section class="content">
         @yield('conteudo')
     </section>
</body>
</html>