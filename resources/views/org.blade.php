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
                <form class="table-form" action="" method="post">
                    <table id="client-plan" class="table table-bordered cabecalho-table ">
                        <div class="botoes-table">
                            <button id="addRow" type="button" name="create_record" id="create_record" class="btn btn-success"> <i class="bi bi-plus-square"></i>  <b>Add Linha</b></button>
                            <button id="consolidar" type="button" name="create_record" id="create_record" class="btn btn-success"> <i class="bi bi-plus-square"></i>  <b>Consolidar</b></button>
                            <button id="salvarDados" type="submit" name="create_record" id="create_record" class="btn btn-success"> <i class="bi bi-plus-square"></i>  <b>Salvar</b></button>
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
                        </thead>
                        <tbody></tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <input id="data-route-url-table" type="hidden" data-route-url-table="{{ route('planoTable') }}">
    <input id="data-route-url-post-table" type="hidden" data-route-url-post-table="{{ route('planoTableStore') }}">
    <input id="data-cliente-id" type="hidden" data-cliente-id="{{ $org->fk_cliente }}">
    <input id="show-table" type="hidden" show-table="{{ route('showTable') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
</div>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" integrity="" crossorigin="anonymous">

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" integrity="" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" integrity="" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/3.25.2/minified.js" integrity="sha512-yHLAgovfc/zAwDgU0iMrEg2NtpJJctpOFIAHVpqVm7qOumLjLi9LhX7gvOwZp7sn70yjpP+BqxUGmV+J3fdIVg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.13.6/underscore-min.js" integrity="sha512-2V49R8ndaagCOnwmj8QnbT1Gz/rie17UouD9Re5WxbzRVUGoftCu5IuqqtAM9+UC3fwfHCSJR1hkzNQh/2wdtg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function selectFunction(dados){
        let option = $( `#${dados.id} option:selected` ).text()
        input = ''
        let name
       // console.log(option,'opt')
        if(option == 'Personalizar' ){
            name = dados.id.split('-')
            //retirar o dropdow
            $(`#table-${dados.id} select`).removeAttr('name')
             $(`#table-${dados.id} select`).hide()
             //colocar o input
             input = `<input type="text" class="form-control" name="${name[0]}*input">`
             $(`#table-${dados.id}`).append(input)
            //botao de voltar para o drop
        }
        
    }
    $(document).ready(function() {
          let url = $("#data-route-url-table").attr('data-route-url-table')
          id = $("#data-cliente-id").attr('data-cliente-id')
      /*  var table = $('#client-plan').DataTable({
            searching: "false",
            paging: false,
            "processing": true,
            searching: false,
            info: false,
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
            },
           /* order: [[2, 'asc']],
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
                    
                ]
                
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
        //variaveis globais
        var idTable = 0
        function getDataSppinner(url,data,div) {
                //console.log(data,'data')
                return new Promise(function(resolve, reject) {
                    return request = $.ajax({
                        headers: {
                            'X-CSRF-TOKEN':  $("input[name=_token]").val()
                        },
                        type: 'POST',
                        // dataType: 'json',
                        url: url,
                        beforeSend: function(){
                           // $(div.sppinner).show();
                           // $(div.div).hide();
                        },   
                        complete: function(){
                            //$(div.sppinner).hide();
                            //$(div.div).show();
                        },
                        data: data,
                        success: resolve,
                        error: reject
                    });
                });
        } 
       //salvar as linhas
        $( ".table-form" ).submit(function( event ) {
            let url = $("#data-route-url-post-table").attr('data-route-url-post-table')
            let data = $( this ).serializeArray()
            console.log(data,)
            event.preventDefault();
            result2 = []
            data.forEach(function(element) {
                if(element['name'] == 'id')
                result2.push([])
                result2[result2.length - 1].push(element)
            })
           let payload = {
                dados: result2
            }
            resultAjax = getDataSppinner(url,payload,'')//grava no banco
            resultAjax.then(function(){
                povoarTable() //renderiza a tabela
            })
      
        });
        
        function getdrop(item,id,index){
           // console.log(index,'item')
                let drop=    `<select onchange="selectFunction(this)" name ="${id}*select" id="${id}-${index}" class="custom-select">`
                                item.map(function(i,j){
                                        drop+=`<option onclick="selectDrop(this)" value="${i.replace(/\s/g, '')}" data-input="${id}-${index}" class='selectDrop'>${i}</option>`
                                })
                drop+=`</select>`
            return drop
        }
        //adicionar linha
        $('#addRow').on('click', function () {
            $("table .dataTables_empty").hide()
            var index = $("#client-plan tbody tr:last-child").index() ;
            idTable += 1;
            console.log(index,'index')
           // var linha = $("table tbody tr td");
         //   console.log(index,'libha')
            var row = '<tr>' +
                        '<input type="hidden"  name="id" value='+ idTable +'>' +
                        '<td><input type="text" class="form-control" name="regiao" id="regiao"></td>' +
                        '<td><input type="text" class="form-control" name="personalizar_1" id="personalizar_1"></td>' +
                        '<td><input type="text" class="form-control" name="personalizar_2" id="personalizar_2"></td>' +
                        '<td><input type="text" class="form-control" name="campanha" id="campanha"></td>' +
                        '<td><input type="text" class="form-control" name="publico_alvo" id="publico_alvo"></td>' +
                        '<td id="table-objetivo-'+idTable+'">'+ getdrop(['Alcance','Reconhecimento','Tráfeco','Conversões','Personalizar'],'objetivo',idTable)+'</td>'+
                        '<td>'+ getdrop(['Google','Meta','Linkedin','Twitter','Personalizar'],'veiculo',idTable)+'</td>' +
                        '<td>'+ getdrop(['Search','Display','Youtube','Facebook','Instagram','Linkedin','Personalizar'],'canal',idTable)+'</td>' +
                        '<td>'+ getdrop(['Texto','Banner','Vídeo','Push Notification','Imagens única','Carrossel','Personalizar'],'formatos',idTable)+'</td>' +
                        '<td>'+ getdrop(['CPM','CPC','CPV','CPE','CPL','CPA','Personalizar'],'modelos_de_compra',idTable)+'</td>' +
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
           let drop=    `<select onchange="selectFunction(this)" name ="${id}*select" id="${id}-${index}" class="custom-select">`
                                item.map(function(i,j){
                                       if(i.replace(/\s/g, '') == select){
                                       // console.log(i,select,'teste')
                                           drop+=`<option selected onclick="selectDrop(this)" value="${i.replace(/\s/g, '')}" data-input="${id}-${index}" class='selectDrop'>${i}</option>`
                                       }else{
                                        drop+=`<option  onclick="selectDrop(this)" value="${i.replace(/\s/g, '')}" data-input="${id}-${index}" class='selectDrop'>${i}</option>`
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
           console.log(index,'indexantido')
            idTable += 1;
            console.log(row[0].cells,'clome')
         // console.log(idTable,'idTable')
           let linha = `<tr> <input type="hidden"  name="id" value='${idTable}'>`
           for(let item of row[0].cells) {
            //input
            if(item.childNodes[0].type == 'text'){
                texto = $(`#${item.childNodes[0].id}`).val()
                        linha+= `<td>
                            <input value ='${texto}'type="text" class="form-control" name='${item.childNodes[0].id}' id='${item.childNodes[0].id}'></td>`
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
                                linha+=`<td  id="table-objetivo-${idTable}">${getdropUp(['Alcance','Reconhecimento','Tráfeco','Conversões','Personalizar'],'objetivo',idTable, selectOption)}</td>`
                            break
                            case "veiculo":
                                linha+=`<td>${getdropUp(['Google','Meta','Linkedin','Twitter','Personalizar'],'veiculo',idTable, selectOption)}</td>`
                                break;
                            case "canal":
                                linha+=`<td>${getdropUp(['Search','Display','Youtube','Facebook','Instagram','Linkedin','Personalizar'],'canal',idTable, selectOption)}</td>`
                                break;
                            case "formatos":
                                linha+=`<td>${getdropUp(['Texto','Banner','Vídeo','Push Notification','Imagens única','Carrossel','Personalizar'],'formatos',idTable, selectOption)}</td>`
                                break;
                            case "modelos_de_compra":
                                linha+=`<td>${getdropUp(['CPM','CPC','CPV','CPE','CPL','CPA','Personalizar'],'modelos_de_compra',idTable, selectOption)}</td>`
                                break;
                        }
                    }
                }
           }
           linha+=`<td><i class='fas fa-clone duplicar'></i><i class='fas fa-trash-alt delete'></i></td>`
           linha+=`<tr>`
            $("#client-plan").append(linha);//insere a linha
        });
        //constroi a tabela com os dados do banco
        function construirHtmltable(item){
            let type
            //objtivo
            type  = item.objetivo.split("*")
            type[1] == 'select'  ?  objetivo = getdropUp(['Alcance','Reconhecimento','Tráfeco','Conversões','Personalizar'],'objetivo',item.id,type[0]) : '<input value="'+item.objetivo+'" name="objetivo*input" type="text" class="form-control">'
            //veiculo
            type2  = item.veiculo.split("*")
            type2[1] == 'select' ? veiculo = getdropUp(['Google','Meta','Linkedin','Twitter','Personalizar'],'veiculo',item.id, type2[0]) : '<input value="'+item.veiculo+'" name="veiculo*input" type="text" class="form-control">'
            //canal
            type3= item.canal.split("*")
            type3[1] == 'select' ? canal = getdropUp(['Search','Display','Youtube','Facebook','Instagram','Linkedin','Personalizar'],'canal',item.id,type3[0]) : '<input value="'+item.canal+'" name="canal*input" type="text" class="form-control">'
            //formatos
            type4 = item.formatos.split("*")
            type4[1] = 'select' ? formato = getdropUp(['Texto','Banner','Vídeo','Push Notification','Imagens única','Carrossel','Personalizar'],'formatos',item.id, type4[0]) : '<input value="'+item.formatos+'" name="formatos*input" type="text" class="form-control">'
            //modelos de compra
            type5 = item.modelos_compra.split("*")
            type5[1] = 'select' ?  modelo = getdropUp(['CPM','CPC','CPV','CPE','CPL','CPA','Personalizar'],'modelos_de_compra',item.id, type5[0]) : '<input value="'+item.modelos_compra+'" name="modelos_compra*input" type="text" class="form-control">'
            var   row = '<tr>' +
                            '<input type="hidden"  name="id" value='+item.id+'>'+
                            '<td><input value="'+item.regiao+'" type="text" class="form-control" name="regiao" id="regiao"></td>' +
                            '<td><input value="'+item.persornalizar_1+'" type="text" class="form-control" name="personalizar_1" id="personalizar_1"></td>' +
                            '<td><input value="'+item.personalizar_2+'" type="text" class="form-control" name="personalizar_2" id="personalizar_2"></td>' +
                            '<td><input value="'+item.campanha+'" type="text" class="form-control" name="campanha" id="campanha"></td>' +
                            '<td><input value="'+item.publico_alvo+'" type="text" class="form-control" name="publico_alvo" id="publico_alvo"></td>' +
                            '<td id="table-objetivo-'+item.id+'">'+objetivo+'</td>'+
                            '<td id="table-veiculo-'+item.id+'">'+veiculo+'</td>'+
                            '<td id="table-canal-'+item.id+'">'+canal+'</td>'+
                            '<td id="table-formatos-'+item.id+'">'+formato+'</td>'+
                            '<td id="table-modelos_de_compra-'+item.id+'">'+modelo+'</td>'+
                            '<td><input value="'+item.periodo+'" type="text" class="form-control" name="periodo" id="periodo"></td>' +
                            '<td><input value="'+item.investimento+'" type="text" class="form-control" name="investimneto" id="investimento"></td>' +
                            '<td><i class="fas fa-clone duplicar"></i><i class="fas fa-trash-alt"></i></td>'+
                        '</tr>';
            return row;
        }
        function povoarTable(){
            //chamar o ajax
            let idCli = $("#data-cliente-id").attr('data-cliente-id')
            let url = $("#show-table").attr('show-table')
            data = {
                id :idCli
            }
            result = getDataSppinner(url,data,'')
            result.then(function(data){
                data.length == 0 ?  idTable = 0 : idTable= data.length //retorna a quantidade de linhas do banco
                //Limpar a tabela
                $('#client-plan tbody > tr').remove();
                if(data.length > 0){
                    data.map(function(item,j){
                        //console.log(item,'item')
                        //construir uma funcao o hml para cada
                        resultRow = construirHtmltable(item)
                        $("#client-plan").append(resultRow);//insere a linha
                    })
                }
                //ler os dados separando os types
                //atribuir na tabela  
               // console.log(data, 'data')
            })
           
        }
        povoarTable()
        function construirHtmltableConsolidado(item){
                console.log(item,'funcao')
              //  var row
                var rowTotal
                Object.keys(item, function(item,j){
                    console.log('çsldk')
                    item.linhas.map(function(bruno,k){
                        console.log(bruno,'item')
                    })
                })
                 _.mapObject(item, function(value,key){
                  //  console.log(value,'value')
                     value.linhas.map(function(item,j){
                        console.log(item,'item')
                     var  row = '<tr>' +
                            //'<input type="hidden"  name="id" value='+item.id+'>'+
                            '<td><input value="'+item.regiao+'" type="text" class="form-control" name="regiao" id="regiao"></td>' +
                            '<td><input value="'+item.personalizar_1+'" type="text" class="form-control" name="personalizar_1" id="personalizar_1"></td>' +
                            '<td><input value="'+item.personalizar_2+'" type="text" class="form-control" name="personalizar_2" id="personalizar_2"></td>' +
                            '<td><input value="'+item.campanha+'" type="text" class="form-control" name="campanha" id="campanha"></td>' +
                            '<td><input value="'+item.publico_alvo+'" type="text" class="form-control" name="publico_alvo" id="publico_alvo"></td>' +
                            '<td ><input value="'+item.ojetivo+'" type="text" class="form-control" name="publico_alvo" id="publico_alvo"></td></td>'+
                            '<td><input value="'+item.veiculo+'" type="text" class="form-control" name="publico_alvo" id="publico_alvo"></td></td>'+
                            '<td ><input value="'+item.canal+'" type="text" class="form-control" name="publico_alvo" id="publico_alvo"></td></td>'+
                            '<td><input value="'+item.formatos+'" type="text" class="form-control" name="publico_alvo" id="publico_alvo"></td></td>'+
                            '<td><input value="'+item.modelos+'" type="text" class="form-control" name="periodo" id="periodo"></td>' +
                            '<td><input value="'+item.periodo+'" type="text" class="form-control" name="investimneto" id="investimento"></td>' +
                            '<td><input value="'+item.investimento+'" type="text" class="form-control" name="investimneto" id="investimento"></td>' +
                            '<td><i class="fas fa-clone duplicar"></i><i class="fas fa-trash-alt"></i></td>'+
                          //  return row;
                           // console.log(index,'index')
                           '</tr>'+
                           console.log()
                           $("#client-plan").append(row);//insere a linha
                        })
                       var rowTotal = '<tr>'+'<td style="color: #FFFF"> Total  ' +value.total+'</td>'+'</tr>'
                        $("#client-plan").append(rowTotal);//insere a linha
                       // '<tr>'+'<td style="color: #FFFF"> '+value.total+'</td>'+'</tr>'
                   // row,'row')
                 //  return row
                 })
               // console.log(row,'row')
                // return row
        }
        $(document).on("click", "#consolidar", function(){
            var arrData =[]
              $('#client-plan tbody tr').each(function(){
                var customerId = $(this).find("td").eq(0).html();  //regiao
                var customerId2 = $(this).find("td").eq(1).html(); //personalizar_1'
                var customerId3 = $(this).find("td").eq(2).html();  //persornalizar_2
                var customerId4 = $(this).find("td").eq(3).html();  //campanha
                var customerId5 = $(this).find("td").eq(4).html();  //publico
                var customerId6 = $(this).find("td").eq(5); //objetivo
                var customerId7 = $(this).find("td").eq(6); //veiculo
                var customerId8 = $(this).find("td").eq(7); //canal
                var customerId9 = $(this).find("td").eq(8); //formatos
                var customerId10 = $(this).find("td").eq(9); //modelos
                var customerId11 = $(this).find("td").eq(10).html();  //periodo
                var customerId12 = $(this).find("td").eq(11).html();  //investimento
                select6 = $(`#${customerId6[0].childNodes[0].id} option:selected`).val();
                select7 = $(`#${customerId7[0].childNodes[0].id} option:selected`).val();
                select8 = $(`#${customerId8[0].childNodes[0].id} option:selected`).val();
                select9 = $(`#${customerId9[0].childNodes[0].id} option:selected`).val();
                select10 = $(`#${customerId10[0].childNodes[0].id} option:selected`).val();
                //console.log($(`${customerId6} option:selected`).text(),'6')
                var obj={};
                  obj.regiao=$(customerId).val();
                  obj.personalizar_1=$(customerId2).val();
                  obj.personalizar_2=$(customerId3).val();
                  obj.campanha=$(customerId4).val();
                  obj.publico_alvo=$(customerId5).val();
                  obj.ojetivo= select6;
                  obj.veiculo= select7;
                  obj.canal= select8;
                  obj.formatos= select9;
                  obj.modelos= select10;
                  obj.periodo=$(customerId11).val();
                  obj.investimento=$(customerId12).val();
                  arrData.push(obj);
              })  
             // console.log(arrData,'arrData')
                       /* var types = _.groupBy(arrData, 'canal');
                       // console.log(types);
                        var result = {};
                        _.each(types, function(val, key) {
                           // console.log(val,'val')
                           return [key, _.reduce(val, function(result, currentObject) {
                                return {
                                    total: result.investimento + currentObject.investimento,
                                   // numOfPeople: result.numOfPeople + currentObject.numOfPeople
                                }
                                }, 
                                {
                                    total: 0,
                                   // numOfPeople: 0
                                }
                            )];
                        });*/
                        var sum = function(t, n) { return parseInt(t) + parseInt(n); };
                        var result2 = _.mapObject(
                            _.groupBy(arrData, 'canal'),
                            function(values, canal) {
                                return {
                                    total: _.reduce(_.pluck(values, 'investimento'), sum, 0),
                                    linhas: values
                                };
                            }
                        );
                         //Limpar a tabela
                        $('#client-plan tbody > tr').remove();
                       construirHtmltableConsolidado(result2);
                        // $("#client-plan").append(construirHtmltableConsolidado(result2));//insere a linha
                       // construirHtmltableConsolidado(result2)
                      //  console.log(result2,'types')
                       // console.log(types,'types')
                        
        })
        
    })
    
</script>
@endsection