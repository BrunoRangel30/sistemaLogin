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
        width: 150px;
    }
    #client-plan tr td select {
        padding: 8px;
        width: 150px;
        border: none;
        color: #61fb89;
        background-color: #000;
    }
    #client-plan tr td select option{
        background-color: #5a5855;
    }
    #client-plan tr td i {
        color: #61fb89;
        padding: 2px;
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
    #client-plan .dataTables_empty{
        color: #ffffff
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
            <p>Organização: {{ $org->org }}</p>
            <p>Cliente: {{ $org->nome }}</p>
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
                <table id="client-plan" class="table table-bordered cabecalho-table ">
                    <div class="botoes-table">
                        <button id="addRow" type="button" name="create_record" id="create_record" class="btn btn-success"> <i class="bi bi-plus-square"></i>  <b>Add Linha</b></button>
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
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <input id="data-route-url-table" type="hidden" data-route-url-table="{{ route('planoTable') }}">
    <input id="data-cliente-id" type="hidden" data-cliente-id="{{ $org->fk_cliente }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
</div>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" integrity="" crossorigin="anonymous">

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" integrity="" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" integrity="" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
          let url = $("#data-route-url-table").attr('data-route-url-table')
          id = $("#data-cliente-id").attr('data-cliente-id')
        var table = $('#client-plan').DataTable({
            searching: "false",
            paging: false,
            "processing": true,
            searching: false,
            info: false,
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
            },
           /* order: [[2, 'asc']],*/
            "ajax": {
                "url": url,
                "type": "POST",
                'data': function (d) {
                        d._token = $("input[name=_token]").val();
                        d.id = id
                }
            },
            "columns":[
                    {
                        data:'regiao',
                       
                    },
                    {  data:'personalizar_1'
    
                    },
                    {
                        data:'personalizar_2',
                    },
                    {
                        data:'campanha',
                    },
                    {
                        data:'publico_alvo',
                    },
                    {
                        data:'objetivo',
                    },
                    {
                        data:'veiculo',
                    },
                    {
                        data:'canal',
                    },
                    {
                        data:'formatos',
                    },
                    {
                        data:'modelos_compra',
                    },
                    {
                        data:'periodo',
                    },
                    {
                        data:'investimento',
                    },
                    {
                        data:'acoes',
                         render: function(data, type) {
                         var icones = [];
                         icones.push(
                         `<i class='fas fa-clone duplicar'></i>
                         <i class='fas fa-trash-alt delete'></i>` 
                         )
                         return butoes;
                     }
                    },
                    
            ],   
            rowGroup: {
                endRender: function ( rows, group ) {
                    var avg = rows
                        .data()
                        .pluck(5)
                        .reduce( function (a, b) {
                            return a + b.replace(/[^\d]/g, '')*1;
                        }, 0) / rows.count();
    
                    return 'Average salary in '+group+': '+
                        $.fn.dataTable.render.number(',', '.', 0, '$').display( avg );
                },
                dataSrc: 2
            }

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
                
            });
       /* function ativeSelectLine(){
                //marcar selecionadaos no dropdow
            $( "select" ).each(function(j,index) {
                    console.log(index,'index')
                    index.addEventListener('change', function () {
                    var selectedVal = $(`#${this.id} option:selected`).val();
                    console.log(selectedVal,'selectedVal')
                    console.log(this.id,'this.id')
                    $(`#${this.id} > option`).each(function(l,index2){
                            $(index2).removeAttr( "selected" )
                    })
                    $(`#${this.id} > option[value=${selectedVal.replace(/\s/g, '')}]`).attr("selected", 'selected')
                    })
            });
        }
        var select = document.querySelectorAll('select');
        console.log(select)*/
        function getdrop(item,id,index){
           // console.log(index,'item')
                let drop=    `<select name ="${id}-${index}" id="${id}-${index}" class="custom-select">`
                                item.map(function(i,j){
                                        drop+=`<option onclick="selectDrop(this)" value="${i.replace(/\s/g, '')}" data-input="${id}-${index}" class='selectDrop'> ${i}</option>`
                                })
                drop+=`</select>`
            return drop
        }
        //adicionar linha
        $('#addRow').on('click', function () {
            $("table .dataTables_empty").hide()
            var index = $("#client-plan tbody tr:last-child").index();
           // var linha = $("table tbody tr td");
         //   console.log(index,'libha')
            var row = '<tr>' +
                        '<td><input type="text" class="form-control" name="regiao" id="regiao"></td>' +
                        '<td><input type="text" class="form-control" name="personalizar_1" id="personalizar_1"></td>' +
                        '<td><input type="text" class="form-control" name="personalizar_2" id="personalizar_2"></td>' +
                        '<td><input type="text" class="form-control" name="campanha" id="campanha"></td>' +
                        '<td><input type="text" class="form-control" name="publico_alvo" id="publico_alvo"></td>' +
                        '<td>'+ getdrop(['Alcance','Reconhecimento','Tráfeco','Conversões','Personalizar'],'objetivo',index)+'</td>'+
                        '<td>'+ getdrop(['Google','Meta','Linkedin','Twitter','Personalizar'],'veiculo',index)+'</td>' +
                        '<td>'+ getdrop(['Search','Display','Youtube','Facebook','Instagram','Linkedin','Personalizar'],'canal',index)+'</td>' +
                        '<td>'+ getdrop(['Texto','Banner','Vídeo','Push Notification','Imagens única','Carrossel','Personalizar'],'formatos',index)+'</td>' +
                        '<td>'+ getdrop(['CPM','CPC','CPV','CPE','CPL','CPA','Personalizar'],'modelos_de_compra',index)+'</td>' +
                        '<td><input type="text" class="form-control" name="periodo" id="periodo"></td>' +
                        '<td><input type="text" class="form-control" name="investimento" id="investimento"></td>' +
                        `<td><i class='fas fa-clone duplicar'></i><i class='fas fa-trash-alt delete'></i></td>` +
                    '</tr>';
            $("#client-plan").append(row);
           // ativeSelectLine()//ativar select drop
        })   
         // Delete row on delete button click
        $(document).on("click", ".delete", function(){
            $(this).parents("tr").remove(); 
           /* $(".add-new").removeAttr("disabled");
            var id = $(this).attr("id");
            var string = id;
            $.post("ajax_delete.php", { string: string}, function(data) {
            $("#displaymessage").html(data);
            });*/
        });
        //atualizar o drop quando duplica
        function getdropUp(item,id,index,select){
           // console.log(index,'item')
           let drop=    `<select name ="${id}-${index}" id="${id}-${index}" class="custom-select">`
                                item.map(function(i,j){
                                       if(i.replace(/\s/g, '') == select){
                                        console.log(i,select,'teste')
                                           drop+=`<option selected onclick="selectDrop(this)" value="${i.replace(/\s/g, '')}" data-input="${id}-${index}" class='selectDrop'> ${i}</option>`
                                       }else{
                                        drop+=`<option  onclick="selectDrop(this)" value="${i.replace(/\s/g, '')}" data-input="${id}-${index}" class='selectDrop'> ${i}</option>`
                                       }
                                })
                    drop+=`</select>`
            return drop
        }
        //duplica uma linha 
        $(document).on("click", ".duplicar", function(){
           let row
           let texto
           let selectName
           let selectOption
           let index
           row = $(this).parents("tr").clone()
           index = $("#client-plan tbody tr:last-child").index();
           let linha = `<tr>`
           for(let item of row[0].cells) {
            //input
                if(item.childNodes[0].type == 'text'){
                       texto = $(`#${item.childNodes[0].id}`).val()
                        linha+= `<td><input value ='${texto}'type="text" class="form-control" name='${item.childNodes[0].id}' id='${item.childNodes[0].id}'></td>`
                }else{
                    //select
                    if(item.childNodes[0].type == 'select-one'){
                        selectName = item.childNodes[0].id,
                        resultado = selectName.split('-');
                        selectOption = $(`#${item.childNodes[0].id} option:selected`).val()
                     //   console.log(selectOption,'selectOption');
                     //options para cada select
                        switch (resultado[0])
                        {
                            case "objetivo":
                                linha+=`<td>${getdropUp(['Alcance','Reconhecimento','Tráfeco','Conversões','Personalizar'],'objetivo',index, selectOption)}</td>`
                            break
                            case "veiculo":
                                linha+=`<td>${getdropUp(['Google','Meta','Linkedin','Twitter','Personalizar'],'veiculo',index, selectOption)}</td>`
                                break;
                            case "canal":
                                linha+=`<td>${getdropUp(['Search','Display','Youtube','Facebook','Instagram','Linkedin','Personalizar'],'canal',index, selectOption)}</td>`
                                break;
                            case "formatos":
                                linha+=`<td>${getdropUp(['Texto','Banner','Vídeo','Push Notification','Imagens única','Carrossel','Personalizar'],'formatos',index, selectOption)}</td>`
                                break;
                            case "modelos_de_compra":
                                linha+=`<td>${getdropUp(['CPM','CPC','CPV','CPE','CPL','CPA','Personalizar'],'modelos_de_compra',index, selectOption)}</td>`
                                break;
                        }
                    }
                }
           }
            linha+=`<td><i class='fas fa-clone duplicar'></i><i class='fas fa-trash-alt delete'></i></td>`
           linha+=`<tr>`
            $("#client-plan").append(linha);

          // ativeSelectLine()
          // console.log($(this).parents("tr")).innerHTML;
        //  row = document.getElementById("client-plan").rows[0].cells
         //  $("#client-plan").append(row);
           // $("#client-plan").appendChild(row)
        });
        
    })
</script>
@endsection