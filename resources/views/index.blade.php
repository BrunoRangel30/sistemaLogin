<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
          @font-face {
            font-family:GraphikBold;
            src: url("{{ asset('fontes/GraphikBold.otf')}}");
        }
        @font-face {
            font-family:GraphikRegular;
            src: url("{{ asset('fontes/GraphikRegular.otf')}}");
        }
         body {
            font-family: 'GraphikRegular';
            background-color: #000000;
        }
        .config-nav-2{
           height: 140px;
           background-color: #000000 !important;
           border-bottom: 1px solid #3cdd81;
        }
        .config-nav-2 .nav-item {
            margin-right: 50px;
            margin-left: 30px;
        }
        .config-nav-2 .nav-item .item-menu {
            color: #fff !important;
            font-size: 1.7em !important;
            /*text-transform:uppercase;*/
         /*   font-family:GraphikThin;*/
        }
        .config-nav-2 .navbar-brand {
            font-size: 2.3em;
            text-transform:uppercase;
            margin-left: 15px;
        }
        .config-nav-2 .pl-1{
            color: #fff;
        }
        .config-nav-2 .pl-2{
            color:#3cdd81;
        }
        .config-nav-2 .navbar-toggler{
           background-color: #fff !important;
        }
        .config-nav-2 .navbar-collapse{
            margin-top: 15px;
            padding-right: 30px !important;
            z-index: 1;
          /*  background-color: #000000 !important;*/
            border-radius: 10px;
        }
        /*menu interno*/
        .config-nav-2 .nav-item{
            padding: 10px;
        }
        .config-nav-2 .nav-item a {
            color: #3cdd81 !important;
            font-size: 1.3em;
        }
        @media all and (max-width: 900px) {
          /*  .box-form {
                width: 100% !important;
                /*border: 2px solid red
            }
            .top-login {
                margin-top: 30px !important;
               /* border: 2px solid yellowgreen;
            }
            .bt-1 {
                width: 40%;
            }
            .bt-2 {
                width: 40%;
            }
            .config-nav-2 .navbar-brand {
                font-size: 2em !important;
                text-transform:uppercase;
                margin-left: 5px;
            }
            .config-nav-2{
                height: 160px;
            }
            .config-nav-2 .nav-item a {
                color: #3cdd81 !important;
                font-size: 1.2em !important;
                text-transform:uppercase;
               /* font-family:GraphikThin;
            }*/
        }
    </style>
</head>
<body>
    <header>
       <!-- <h1>Meu blog</h1>-->
    </header>
    <section class="menu">
        @component('componentes.menu')@endcomponent
    </section>
    <section class="content">
        @yield('conteudo')
    </section>
</html>