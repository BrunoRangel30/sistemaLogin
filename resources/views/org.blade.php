@extends('index')

<style>
    .subtitulo2 {
        color: #3cdd81 !important;
        font-size: 4em !important;
        text-transform: uppercase;
        font-family: GraphikRegular;
        margin-left: 22%;
        margin-top: 15%;
    }
    
    .icone-1 {
        font-size: 3em;
        color: #3cdd81;
        padding-left: 15px;
    }
    
    .config-page {
        margin: 30px
    }
    
    .box-cliente {
        color: #FFFF;
        margin-bottom: 25px;
    }
    
    .box-cliente p {
        margin-bottom: 5px;
    }
    
    .cabecalho-table th {
        font-size: 0.8em;
        background-color: #61fb89;
        text-align: center !important;
    }
    
    .cabecalho-table tr td input {
        background-color: #000;
        border: none;
        color: #ffffff;
        text-align: center;
        font-size: 0.8em;
        margin-left: auto;
        margin-right: auto;
        display: block;
    }
    
    .cabecalho-table tr td {
        border: 1px solid #61fb89 !important;
    }
    
    #client-plan tr td input {
        padding: 8px;
    }
    
    #client-plan tr td i {
        color: #61fb89;
        padding: 3px;
    }
    
    #client-plan th {
        font-size: 0.8em;
        background-color: #ffffff;
        text-align: center !important;
    }
    
    #client-plan .dropdown-menu {
        background-color: #5a5855;
        color: #61fb89;
        border: 1px solid #61fb89 !important;
    }
    
    #client-plan .dropdown-menu a {
        color: #61fb89;
        text-align: center;
    }
    
    .botoes-table button {
        background-color: #61fb89;
        font-size: 0.7em;
        margin-bottom: 15px;
        color: #000;
    }
    /* .box-table table{
        border: 2px solid yellow;
    }*/
</style>
@section('conteudo')
<div class="config-page">
    <div class="box-table">
        <div class="box-cliente">
            <p>Organização: RCastro Propaganda</p>
            <p>Cliente: Pig Pay</p>
            <p>Plano de Mídia: Teste</p>
        </div>
        <div class="row">
            <div class="col-md-2 col-lg-2" style="padding-right: 0px;">
                <table id="dimensao" class="table cabecalho-table" style="margin-top: 46px;">
                    <thead>
                        <tr>
                            <th>Dimensões</th>
                        </tr>
                        <tbody>
                            <tr>
                                <td>
                                    <input readonly="readonly" value='Alcance Potêncial' type="text">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input readonly="readonly" value='Alcance Previsto' type="text">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input readonly="readonly" value='Impressões' type="text">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input readonly="readonly" value='Cliques' type="text">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input readonly="readonly" value='Sessões' type="text">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input readonly="readonly" value='Engajamentos' type="text">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input readonly="readonly" value='Visualizações' type="text">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input readonly="readonly" value='Leads' type="text">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input readonly="readonly" value='Downloads' type="text">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input readonly="readonly" value='Conversões' type="text">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input readonly="readonly" value='CPM' type="text">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input readonly="readonly" value='CPC' type="text">
                                </td>
                            </tr>
                        </tbody>
                    </thead>
                </table>
            </div>
            <div class="col-md-10 col-lg-10 table-responsive" style="padding-left: 5px;">
                <table id="client-plan" class="table  table-bordered cabecalho-table ">
                    <div class="botoes-table">
                        <button type="button" name="create_record" id="create_record" class="btn btn-success"> <i class="bi bi-plus-square"></i>  <b>Add Linha</b></button>
                        <button type="button" name="create_record" id="create_record" class="btn btn-success"> <i class="bi bi-plus-square"></i>  <b>Consolidar</b></button>
                        <button type="button" name="create_record" id="create_record" class="btn btn-success"> <i class="bi bi-plus-square"></i>  <b>Salvar</b></button>
                    </div>
                    <thead>
                        <tr>
                            <th>Regiao</th>
                            <th>Personalizar 1</th>
                            <th>Personalizar 2</th>
                            <th>Campanha</th>
                            <th>Publico-alvo</th>
                            <th>Objetivo</th>
                            <th>Veículo</th>
                            <th>Canal</th>
                            <th>Formatos</th>
                            <th>Modelos de Compra</th>
                            <th>Período</th>
                            <th>Investimento</th>
                            <th>Ações</th>
                        </tr>
                        <tbody>
                            <tr>
                                <td>
                                    <input value='' type="text">
                                </td>
                                <td>
                                    <input value='' type="text">
                                </td>
                                <td>
                                    <input value='' type="text">
                                </td>
                                <td>
                                    <input value='' type="text">
                                </td>
                                <td>
                                    <input value='' type="text">
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <input value='selecione' readonly="readonly" type="text" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Alcance</a>
                                            <a class="dropdown-item" href="#">Reconhecimento</a>
                                            <a class="dropdown-item" href="#">tráfego</a>
                                            <a class="dropdown-item" href="#">Conversões</a>
                                            <a class="dropdown-item" href="#">Personalizar</a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <input value='selecione' readonly="readonly" type="text" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Google</a>
                                            <a class="dropdown-item" href="#">Meta</a>
                                            <a class="dropdown-item" href="#">Linkedin</a>
                                            <a class="dropdown-item" href="#">Twitter</a>
                                            <a class="dropdown-item" href="#">Personalizar</a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <input value='selecione' readonly="readonly" type="text" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Search</a>
                                            <a class="dropdown-item" href="#">Display</a>
                                            <a class="dropdown-item" href="#">Youtube</a>
                                            <a class="dropdown-item" href="#">Facebook</a>
                                            <a class="dropdown-item" href="#">Instagram</a>
                                            <a class="dropdown-item" href="#">Linkedin</a>
                                            <a class="dropdown-item" href="#">Twitter</a>
                                            <a class="dropdown-item" href="#">Personalizar</a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <input value='selecione' readonly="readonly" type="text" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Texto</a>
                                            <a class="dropdown-item" href="#">Banner</a>
                                            <a class="dropdown-item" href="#">Vídeo</a>
                                            <a class="dropdown-item" href="#">Push Notification</a>
                                            <a class="dropdown-item" href="#">Imagens única</a>
                                            <a class="dropdown-item" href="#">Carrossel</a>
                                            <a class="dropdown-item" href="#">Personalizar</a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <input value='selecione' readonly="readonly" type="text" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">CPM</a>
                                            <a class="dropdown-item" href="#">CPC</a>
                                            <a class="dropdown-item" href="#">CPV</a>
                                            <a class="dropdown-item" href="#">CPE</a>
                                            <a class="dropdown-item" href="#">CPL</a>
                                            <a class="dropdown-item" href="#">CPA</a>
                                            <a class="dropdown-item" href="#">Personalizar</a>
                                        </div>
                                    </div>
                                </td>
                                <td> <input value='' type="text">
                                </td>
                                <td> <input value='' type="text">
                                </td>
                                <td>
                                    <i class="fas fa-edit"></i>
                                    <i class="fas fa-clone"></i>
                                </td>
                            </tr>
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" integrity="" crossorigin="anonymous">
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" integrity="" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        //  url = $("#url-ajax-table-vendas").attr('data-url-ajax')
        var table = $('#client-plan').DataTable({
            searching: "false",
            paging: false,
            "searching": false,
            "info": false,
            /* "ajax": {
                 "url": url,
                 "type": "GET",
                 
             },
            paging: false,
            headers: {
                'X-CSRF-Token': $('input[name="_token"]').val()
            },
            ordering: false,
            "processing": true,
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
            },
            /* "columns":[
                 {
                     data:'status',
                 },
                 {
                     data:'id_pagamento',
                 },
                 {
                     data:'texte',
                 },
                /* {
                     data:'valor_pedido',
                     render: function(data){
                         return `R$ ${data}`
                     }
                 },
                 {
                     data:'name',
                 },
                 {
                     data:'forma_envio',
                     render: function(data){
                         switch (data) {
                             case '1':
                                 return "Retirada na Loja"
                                 break;
                             case '2':
                                 return "Entrega Local"
                                 break;
                             case '3':
                                 return "Frete Grátis"
                                 break;
                             case '4':
                                 return "Frete"
                                 break;
                             default:
                                 return "-"
                         }

                     }
                 },
                 {
                     data:'status_envio',
                 },
                 {
                     data:'data_recebimento',
                     render: function(data){
                     //  console.log(data,'data')
                         data = new Date(data);
                         dataFormatada = data.toLocaleDateString('pt-BR', {
                             year: 'numeric',
                             month: 'numeric',
                             day: 'numeric',
                             hour: 'numeric',
                             minute: 'numeric',
                         });
                         return dataFormatada
                     }
                 },
                 {
                     data:'idP',
                     render: function(data, type) {
                         var butoes = [];
                         butoes.push(
                         `<button id="${data}" data-tipo="etiqueta" onclick="index(this)" ><i style="color:#fc791e; font-size:1.4em" class="fas fa-info-circle"></i></button>
                         <button id="${data}" data-tipo="edicao" onclick="index(this)" type="button"><i style="color:#fc791e ;font-size:1.4em" class="fas fa-edit"></i></button>` 
                         )
                         return butoes;
                     }
                 },
                 
             ]*/
            /* ajax: {
                 url: "http://myjson.dit.upm.es/api/bins/11el",
                 method: "Get",
                 dataType: "json"
             },
             searching: "false",
             /*  columns: [{
                   data: "id"
               }, {
                   data: "fullname"
               }, {
                   data: "statusDescr"
               }],
               /* initComplete: function(settings, json) {
                    var officeData = this.api().column(2).data();
                    var officeNodes = this.api().column(2).nodes().toArray();
                    var officeList = officeData.unique().sort().toArray()
                    console.log(officeNodes)
                    officeData.each(function(cellValue, idx) {
                        var options = '';
                        officeList.forEach((office) => {
                            if (office === cellValue) {
                                options = options + '<option value="' + office + '" selected>' + office + '</option>';
                            } else {
                                options = options + '<option value="' + office + '">' + office + '</option>';
                            }
                        })
                        var officeSelect = $('<select id="ID NUMBER" >' + options + '</select>');
                        officeSelect.prependTo($(officeNodes[idx]).empty());
                    })
                }*/
        });
    })
</script>
@endsection