@extends('index')
<style>
    .subtitulo1{
        color: #fff !important;
        font-size: 1.5em !important;
        text-transform:uppercase;
        font-family:GraphikThin;
        padding-left: 30px;
        padding-top: 10px;
    }
    .icone-1{
        font-size: 3em;
        color: #3cdd81;
        padding-left: 15px;
    }
    .config-page{
        margin-top:30px
    }
</style>
@section('conteudo')
<div class="container config-page">
    <div class="row">
        <div class="col-md-12 col-lg-12" style="display:inline-flex">
            <i class="icone-1 fas fa-plus-circle"></i>
            <h3 class="subtitulo1"> Plano de Mídia</h3>
        </div>
    </div>
</div>
@endsection