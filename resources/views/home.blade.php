@extends('index')
<style>
    .subtitulo1{
        color: #fff !important;
        font-size: 1.6em !important;
       /* text-transform:uppercase;*/
        /*font-family:GraphikThin;*/
        padding-left: 30px;
        padding-top: 8px;
    }
    .icone-1{
        font-size: 3em;
        color: #3cdd81;
      /*  padding-left: 15px;*/
    }
    .config-page{
        margin-top:30px;
        margin-left:70px
    }
    .botao1 .btn-secondary {
        background-color: #000000;
        border-color: #000000 ;
    }
    .botao1 .btn-secondary:hover {
        background-color: #000000;
        border-color: #000000;
    }
    .botao1 .dropdown-menu ul{
        list-style: none;
        margin-top: 10px;
        color: #3cdd81 !important
        /*border: 2px solid blue;*/
    }
</style>
@section('conteudo')
<div class="config-page">
    <div class="row">
        
        <div class="col-md-12 col-lg-12" style="display:inline-flex;">
            <i class="icone-1 fas fa-plus-circle"></i>
            <div class="btn-group pl-3 botao1">
                <button class="btn btn-secondary btn-sm subtitulo1" type="button">
                    Plano de Mídia
                </button>
                <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <ul>
                        <li class="pt-2"><a style="color:#3cdd81;text-decoration: none" href="{{route('org')}}">Cliente 2</a></li>
                        <li class="pt-2"><a style="color:#3cdd81;text-decoration: none"href="{{route('org')}}">Cliente 2</a></li>
                        <li class="pt-2"><a style="color:#3cdd81;text-decoration: none" href="{{route('org')}}">Cliente 2</a></li>
                    </ul>
                </div>
            </div>
            {{-- <astyle="text-decoration:none"class="subtitulo1"href="route('org')}}">Plano de Mídia </a>--}}
        </div>
    </div>
</div>
@endsection