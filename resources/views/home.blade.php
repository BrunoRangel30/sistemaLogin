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
</style>
@section('conteudo')
<div class="config-page">
    <div class="row">
        <div class="col-md-12 col-lg-12" style="display:inline-flex;">
            <i class="icone-1 fas fa-plus-circle"></i>
            <a style="text-decoration:none"class="subtitulo1" href="{{ route('org') }}">Plano de Mídia </a>
        </div>
    </div>
</div>
@endsection