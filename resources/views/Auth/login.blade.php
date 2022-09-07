@extends('welcome')
@section('conteudo')
    <div class="container top-login">
        <div class="row">
            <div class="col-md-12">
                <div style="display:block; margin-left:auto; margin-right:auto;" class="mt-5 mb-5 box-form">
                    <div class="cabecalho-login pt-3">
                        <i style="color:#3cdd81" class="fas fa-circle"></i>
                        <h2 class="pt-3 titulo-login">bem-vindo</h2>
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
                    <div class="itens-form">
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
                                <i style="position:absolute;margin-top:27px; margin-left:20px;color:#fff"class="fas fa-lock"></i>
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
@endsection