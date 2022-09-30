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
        text-align: center
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
        text-align: center
    }
    #client-plan tr td #returnDrop {
       text-align: center;
       cursor: pointer;
      margin-left: 60px;
      margin-top: 5px;
       
    }
    
    #client-plan th {
        font-size: 0.8em;
        background-color: #ffffff;
        margin-left: 50px
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
    
    .cabecalho-table  tbody .total-linha td{
        border: none  !important;
    }
    .cabecalho-table  tbody .nomeTotal{
        color: #36601c;
        text-transform: uppercase;
        font-size: 0.9em;
        font-weight: bold;
        text-align: center
    }
    nomeTotal
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
                                <th><input  type="text"  id="personalizar1-col"></th>
                                <th><input  type="text"  id="personalizar2-col"></th>
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
   //constroi as opções dos drop
    function getdrop(item,id,index){
           // console.log(index,'item')
        let drop=`<select onchange="selectFunction(this)" name ="${id}*select" id="${id}-${index}" class="custom-select">`
                    item.map(function(i,j){
                            drop+=`<option onclick="selectDrop(this)" value="${i.replace(/\s/g, '')}" data-input="${id}-${index}" class='selectDrop'>${i}</option>`
                    })
        drop+=`</select>`
        return drop
        }
    //retona os select
    function returnDrop(dados){
        let idDrop = dados.id.split('/')
        let idDrop2 = idDrop[1].split('-')
        switch (idDrop2[0]) {
            case 'objetivo':
                $(`#table-${idDrop[1]} input`).remove()
                $(`#table-${idDrop[1]} span`).remove()
                drop = getdrop(['Alcance','Reconhecimento','Tráfeco','Conversões','Personalizar'],'objetivo',idDrop2[1])
                $(`#table-${idDrop[1]}`).append(drop)
            break;
            case 'veiculo':
               // console.log('veiuclo')
                $(`#table-${idDrop[1]} input`).remove()
                $(`#table-${idDrop[1]} span`).remove()
                drop =  getdrop(['Google','Meta','Linkedin','Twitter','Personalizar'],'veiculo',idDrop2[1])
                $(`#table-${idDrop[1]}`).append(drop)
            break;
            case 'canal':
                $(`#table-${idDrop[1]} input`).remove()
                $(`#table-${idDrop[1]} span`).remove()
                drop =  getdrop(['Search','Display','Youtube','Facebook','Instagram','Linkedin','Personalizar'],'canal',idDrop2[1])
                $(`#table-${idDrop[1]}`).append(drop)
              //  console.log('canal')
                break;
            case 'formatos':
                $(`#table-${idDrop[1]} input`).remove()
                $(`#table-${idDrop[1]} span`).remove()
                drop =  getdrop(['Texto','Banner','Vídeo','Push Notification','Imagens única','Carrossel','Personalizar'],'formatos',idDrop2[1])
                $(`#table-${idDrop[1]}`).append(drop)
                //console.log('formmaro')
                break;
            case 'modelos_de_compra':
                $(`#table-${idDrop[1]} input`).remove()
                $(`#table-${idDrop[1]} span`).remove()
                drop =   getdrop(['CPM','CPC','CPV','CPE','CPL','CPA','Personalizar'],'modelos_de_compra',idDrop2[1])
                $(`#table-${idDrop[1]}`).append(drop)
                break;
            default:
        }
    }
    //colica a cmapo para edicao da opcao personalizar
    function selectFunction(dados){
       // console.log(dados.id,'dspds')
        let option = $( `#${dados.id} option:selected` ).text()
        input = ''
        let name
       // console.log(option,'opt')
        if(option == 'Personalizar' ){
            name = dados.id.split('-')
            //retirar o dropdow
            $(`#table-${dados.id} select`).removeAttr('name')
             $(`#table-${dados.id} select`).remove()
             //colocar o input
             input = `<input type="text" class="form-control" name="${name[0]}*input"><span id="drop/${dados.id}"  onclick="returnDrop(this)"><i class="fas fa-undo"></i></span>`
            
             $(`#table-${dados.id}`).append(input)
            //botao de voltar para o drop
        }
        
    }
    $(document).ready(function() {
        //variavis globais
        let url = $("#data-route-url-table").attr('data-route-url-table')
        id = $("#data-cliente-id").attr('data-cliente-id')
        var idTable = 0
        //ajax
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
            let col1
            let col2
          //  console.log(data,)
            event.preventDefault();
            result2 = []
          //  colunas =[]
            data.forEach(function(element) {
                if(element['name'] == 'id')
                result2.push([])
                result2[result2.length - 1].push(element)
            })
            //colunas 
            $('#client-plan thead tr').each(function(){
                 col1 = $(this).find("#personalizar1-col");
                 col2 = $(this).find("#personalizar2-col"); 
            })
           let payload = {
                dados: result2,
                colunas: [
                    col1 = $(`#${col1[0].id}`).val(),
                    col2 = $(`#${col2[0].id}`).val()
                ],
                idCliente : $("#data-cliente-id").attr('data-cliente-id')

            }
           //console.log(payload.colunas,'teste')
            resultAjax = getDataSppinner(url,payload,'')//grava no banco
            resultAjax.then(function(){
                povoarTable() //renderiza a tabela
            })
      
        });
        
      
        //adicionar linha
        $('#addRow').on('click', function () {
            $("table .dataTables_empty").hide()
            //var index = $("#client-plan tbody tr:last-child").index() ;
            idTable += 1;
            var row = '<tr>' +
                        '<input type="hidden"  name="id" value='+ idTable +'>' +
                        '<td id="table-regiao-'+idTable+'"><input type="text" class="form-control" name="regiao" id="regiao"></td>' +
                        '<td><input type="text" class="form-control" name="personalizar_1" id="personalizar_1"></td>' +
                        '<td><input type="text" class="form-control" name="personalizar_2" id="personalizar_2"></td>' +
                        '<td><input type="text" class="form-control" name="campanha" id="campanha"></td>' +
                        '<td><input type="text" class="form-control" name="publico_alvo" id="publico_alvo"></td>' +
                        '<td id="table-objetivo-'+idTable+'">'+ getdrop(['Alcance','Reconhecimento','Tráfeco','Conversões','Personalizar'],'objetivo',idTable)+'</td>'+
                        '<td id="table-veiculo-'+idTable+'">'+ getdrop(['Google','Meta','Linkedin','Twitter','Personalizar'],'veiculo',idTable)+'</td>' +
                        '<td id="table-canal-'+idTable+'">'+ getdrop(['Search','Display','Youtube','Facebook','Instagram','Linkedin','Personalizar'],'canal',idTable)+'</td>' +
                        '<td id="table-formatos-'+idTable+'">'+ getdrop(['Texto','Banner','Vídeo','Push Notification','Imagens única','Carrossel','Personalizar'],'formatos',idTable)+'</td>' +
                        '<td id="table-modelos_de_compra-'+idTable+'">'+ getdrop(['CPM','CPC','CPV','CPE','CPL','CPA','Personalizar'],'modelos_de_compra',idTable)+'</td>' +
                        '<td><input type="text" class="form-control" name="periodo" id="periodo"></td>' +
                        '<td><input step="any" pattern="[0-9]+([,\.][0-9]+)?" min="0" type="number" class="form-control" name="investimneto" id="investimneto"></td>' +
                        `<td><i class='fas fa-clone duplicar'></i><i class='fas fa-trash-alt delete'></i></td>` +
                    '</tr>';
            $("#client-plan").append(row);
        })

         // Delete row on delete button click
        $(document).on("click", ".delete", function(){
            $(this).parents("tr").remove(); 
        });


        //atualizar o drop 
        function getdropUp(item,id,index,select){
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
        //retorna htm de um linha
        function lineHTML(objeto){
            var   row = '<tr>' +
                            '<input type="hidden"  name="id" value='+objeto.id+'>'+
                            '<td><input value="'+objeto.regiao+'" type="text" class="form-control" name="regiao" id="regiao"></td>' +
                            '<td><input value="'+objeto.personalizar_1+'" type="text" class="form-control" name="personalizar_1" id="personalizar_1"></td>' +
                            '<td><input value="'+objeto.personalizar_2+'" type="text" class="form-control" name="personalizar_2" id="personalizar_2"></td>' +
                            '<td><input value="'+objeto.campanha+'" type="text" class="form-control" name="campanha" id="campanha"></td>' +
                            '<td><input value="'+objeto.publico_alvo+'" type="text" class="form-control" name="publico_alvo" id="publico_alvo"></td>' +
                            '<td id="table-objetivo-'+objeto.id+'">'+objeto.objetivo+'</td>'+
                            '<td id="table-veiculo-'+objeto.id+'">'+objeto.veiculo+'</td>'+
                            '<td id="table-canal-'+objeto.id+'">'+objeto.canal+'</td>'+
                            '<td id="table-formatos-'+objeto.id+'">'+objeto.formatos+'</td>'+
                            '<td id="table-modelos_de_compra-'+objeto.id+'">'+objeto.modelos+'</td>'+
                            '<td><input value="'+objeto.periodo+'" type="text" class="form-control" name="periodo" id="periodo"></td>' +
                            '<td><input step="any" pattern="[0-9]+([,\.][0-9]+)?" min="0" type="number" value="'+objeto.investimento+'" type="text" class="form-control" name="investimneto" id="investimento"></td>' +
                            '<td><i class="fas fa-clone duplicar"></i><i class="fas fa-trash-alt delete"></i></td>'+
                        '</tr>';
            return row;
        }

        //duplica uma linha 
        $(document).on("click", ".duplicar", function(){
           let row
            row = $(this).parents("tr").clone()
            idTable += 1;
            var var1 = row.find("td").eq(0).html()//regiao
            var var2 = row.find("td").eq(1).html()//persinalizar_1
            var var3 = row.find("td").eq(2).html() //personalizar_2
            var var4 = row.find("td").eq(3).html()//campanha
            var var5 = row.find("td").eq(4).html() //publico alvo
            var var6 = row.find("td").eq(5); //objetivo
            var var7 = row.find("td").eq(6); //veiculo
            var var8 = row.find("td").eq(7); //canal
            var var9 = row.find("td").eq(8); //formatos
            var var10 = row.find("td").eq(9); //modelos
            var var11 = row.find("td").eq(10).html() //periodo
            var var12 = row.find("td").eq(11).html() //investimento

            var6[0].childNodes[0].type == 'text' ? type6 = '<input value="'+$(var6[0].childNodes[0]).val()+'" name="objetivo*input" type="text" class="form-control"><span id="drop/objetivo-'+idTable+'"  onclick="returnDrop(this)"><i class="fas fa-undo"></i></span>' : type6 = getdropUp(['Alcance','Reconhecimento','Tráfeco','Conversões','Personalizar'],'objetivo', idTable,$(`#${var6[0].childNodes[0].id} option:selected`).val()) ; //objetivo
            var7[0].childNodes[0].type == 'text' ? type7 = '<input value="'+$(var7[0].childNodes[0]).val()+'" name="veiculo*input" type="text" class="form-control"><span id="drop/veiculo-'+idTable+'"  onclick="returnDrop(this)"><i class="fas fa-undo"></i></span>' : type7 = getdropUp(['Google','Meta','Linkedin','Twitter','Personalizar'],'veiculo', idTable,$(`#${var7[0].childNodes[0].id} option:selected`).val()) ; //veiculo
            var8[0].childNodes[0].type == 'text' ? type8 = '<input value="'+$(var8[0].childNodes[0]).val()+'" name="canal*input" type="text" class="form-control"><span id="drop/canal-'+idTable+'"  onclick="returnDrop(this)"><i class="fas fa-undo"></i></span>' : type8 = getdropUp(['Search','Display','Youtube','Facebook','Instagram','Linkedin','Personalizar'],'canal', idTable,$(`#${var8[0].childNodes[0].id} option:selected`).val()) ; //canal
            var9[0].childNodes[0].type == 'text' ? type9 = '<input value="'+$(var9[0].childNodes[0]).val()+'" name="formatos*input" type="text" class="form-control"><span id="drop/formatos-'+idTable+'"  onclick="returnDrop(this)"><i class="fas fa-undo"></i></span>' : type9 = getdropUp(['Texto','Banner','Vídeo','Push Notification','Imagens única','Carrossel','Personalizar'],'formatos', idTable,$(`#${var9[0].childNodes[0].id} option:selected`).val()) ; //formatos
            var10[0].childNodes[0].type == 'text' ? type10 = '<input value="'+$(var10[0].childNodes[0]).val()+'" name="modelos_de_compra*input" type="text" class="form-control"><span id="drop/modelos_de_compra-'+idTable+'"  onclick="returnDrop(this)"><i class="fas fa-undo"></i></span>' : type10 = getdropUp(['CPM','CPC','CPV','CPE','CPL','CPA','Personalizar'],'modelos_de_compra', idTable,$(`#${var10[0].childNodes[0].id} option:selected`).val()) ; //modelos
            
            var obj={};
            obj.regiao= $(var1).val();
            obj.personalizar_1= $(var2).val();
            obj.personalizar_2=$(var3).val();
            obj.campanha=$(var4).val();
            obj.publico_alvo=$(var5).val();
            obj.objetivo= type6; 
            obj.veiculo= type7;
            obj.canal= type8;
            obj.formatos= type9;
            obj.modelos= type10;
            obj.periodo= $(var11).val();
            obj.investimento = $(var12).val();
            obj.id = idTable;
            $("#client-plan").append(lineHTML(obj));
         
        });

        //constroi a tabela (HTML)
        function construirHtmltable(item){
            //console.log(item,'iem')
            let type
            //objetivo
            type  = item.objetivo.split("*")
            type[1] == 'select'  ?  objetivo = getdropUp(['Alcance','Reconhecimento','Tráfeco','Conversões','Personalizar'],'objetivo',item.id,type[0]) : objetivo = '<input value="'+type[0]+'" name="objetivo*input" type="text" class="form-control"><span id="drop/objetivo-'+item.id+'"  onclick="returnDrop(this)"><i class="fas fa-undo"></i></span>'
            //veiculo
            type2  = item.veiculo.split("*")
            type2[1] == 'select' ? veiculo = getdropUp(['Google','Meta','Linkedin','Twitter','Personalizar'],'veiculo',item.id, type2[0]) : veiculo ='<input value="'+type2[0]+'" name="veiculo*input" type="text" class="form-control"><span id="drop/veiculo-'+item.id+'"  onclick="returnDrop(this)"><i class="fas fa-undo"></i></span>'
            //canal
            type3= item.canal.split("*")
            type3[1] == 'select' ? canal = getdropUp(['Search','Display','Youtube','Facebook','Instagram','Linkedin','Personalizar'],'canal',item.id,type3[0]) : canal = '<input value="'+type3[0]+'" name="canal*input" type="text" class="form-control"><span id="drop/canal-'+item.id+'"  onclick="returnDrop(this)"><i class="fas fa-undo"></i></span>'
            //formatos
            type4 = item.formatos.split("*")
           // console.log(type4[1],'tipo4')
            type4[1] == 'select' ? formato = getdropUp(['Texto','Banner','Vídeo','Push Notification','Imagens única','Carrossel','Personalizar'],'formatos',item.id, type4[0]) : formato = '<input value="'+type4[0]+'" name="formatos*input" type="text" class="form-control"><span id="drop/formatos-'+item.id+'"  onclick="returnDrop(this)"><i class="fas fa-undo"></i></span>'
            //modelos de compra
            type5 = item.modelos_compra.split("*")
            type5[1] == 'select' ?  modelo = getdropUp(['CPM','CPC','CPV','CPE','CPL','CPA','Personalizar'],'modelos_de_compra',item.id, type5[0]) : modelo = '<input value="'+type5[0]+'" name="modelos_compra*input" type="text" class="form-control"><span id="drop/modelos_de_compra-'+item.id+'"  onclick="returnDrop(this)"><i class="fas fa-undo"></i></span>'
            var   row = '<tr>' +
                            '<input type="hidden"  name="id" value='+item.id+'>'+
                            '<td id="table-regiao-'+item.id+'"><input value="'+item.regiao+'" type="text" class="form-control" name="regiao" id="regiao"></td>' +
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
        //constroi com dados salvos do banco
        function povoarTable(){
            //chamar o ajax
            let idCli = $("#data-cliente-id").attr('data-cliente-id')
            let url = $("#show-table").attr('show-table')
            data = {
                id :idCli
            }
            result = getDataSppinner(url,data,'')
            result.then(function(data){
              //  console.log(data.tabela.label_1,'data')
               // atualiza as colunas variaveis
                $('#client-plan thead tr #personalizar1-col').attr('value',data.tabela.label_1)
                $('#client-plan thead tr #personalizar2-col').attr('value',data.tabela.label_2)
                data.plano.length == 0 ?  idTable = 0 : idTable= data.plano.length //retorna a quantidade de linhas do banco
                //Limpar a tabela
                $('#client-plan tbody > tr').remove();
                if(data.plano.length > 0){
                    agruparTable(data.plano) //agrupa a tabela
                }
            })
           
        }
        povoarTable() //chamada inicial para renderizar a tabela
        //agrupa a tabela
        function agruparTable(data){
            var sum = function(t, n) { 
                return parseInt(t) + parseInt(n); 
            };
            $('#client-plan tbody > tr').remove();
            var result2 = _.mapObject(
                            _.groupBy(data, 'veiculo'),
                            function(values, canal) {
                                return {
                                    total: _.reduce(_.pluck(values, 'investimento'), sum, 0),
                                    linhas: values,
                                };
                            }
                        );
             _.mapObject(result2, function(value,key){
                        value.linhas.map(function(item,j){
                                $("#client-plan").append(construirHtmltable(item));//insere a linha
                        })
                        let key2 = key.split('*')
                        var  rowTotal = '<tr class="total-linha">' +
                                                    '<td></td>' +
                                                    '<td></td>' +
                                                    '<td></td>' +
                                                    '<td></td>' +
                                                    '<td><div class="nomeTotal">TOTAL '+key2[0]+'</div></td>' +
                                                    '<td></td>' +
                                                    '<td></td>' +
                                                    '<td></td>' +
                                                    '<td></td>' +
                                                    '<td></td>' +
                                                    '<td></td>' +
                                                    '<td><div class="nomeTotal"> R$ '+value.total+'</div></td>' +
                                                    '<td></td>' +
                                        '</tr>'
                                $("#client-plan").append(rowTotal);//insere a linha
                                // console.log(key,'key')
                            })
        }
        //consolida a tabela para visualização do usuario
        $(document).on("click", "#consolidar", function(){
            var arrData =[]
              $('#client-plan tbody tr').each(function(index,j){
                    var totalLinha = $(this).hasClass('total-linha');  //regiao
                    //não ter as linhas do total
                    if(!totalLinha){
                            console.log('pode fazer')
                            var customerId = $(this).find("td").css('id',`table-regiao-${index}`).eq(0);  //regiao
                            var customerId2 = $(this).find("td").eq(1); //personalizar_1'
                            var customerId3 = $(this).find("td").eq(2);  //persornalizar_2
                            var customerId4 = $(this).find("td").eq(3);  //campanha
                            var customerId5 = $(this).find("td").eq(4);  //publico
                            var customerId6 = $(this).find("td").eq(5); //objetivo
                            var customerId7 = $(this).find("td").eq(6); //veiculo
                            var customerId8 = $(this).find("td").eq(7); //canal
                            var customerId9 = $(this).find("td").eq(8); //formatos
                            var customerId10 = $(this).find("td").eq(9); //modelos
                            var customerId11 = $(this).find("td").eq(10);  //periodo
                            var customerId12 = $(this).find("td").eq(11);  //investimento
                            console.log(customerId ,'teste')
                            customerId6[0].childNodes[0].type == 'text' ? select6 = `${$(customerId6[0].childNodes[0]).val()}*input`  : select6 = `${$(`#${customerId6[0].childNodes[0].id} option:selected`).val()}*select` ; //objetivo
                            customerId7[0].childNodes[0].type == 'text' ? select7 = `${$(customerId7[0].childNodes[0]).val()}*input`  : select7 = `${$(`#${customerId7[0].childNodes[0].id} option:selected`).val()}*select` ; //veiculo
                            customerId8[0].childNodes[0].type == 'text' ? select8 = `${$(customerId8[0].childNodes[0]).val()}*input`  : select8 = `${$(`#${customerId8[0].childNodes[0].id} option:selected`).val()}*select` ; //canal
                            customerId9[0].childNodes[0].type == 'text' ? select9 = `${$(customerId9[0].childNodes[0]).val()}*input`  : select9 = `${$(`#${customerId9[0].childNodes[0].id} option:selected`).val()}*select` ; //formatos
                            customerId10[0].childNodes[0].type == 'text' ? select10 =`${$(customerId10[0].childNodes[0]).val()}*input`: select10= `${$(`#${customerId10[0].childNodes[0].id} option:selected`).val()}*select` ; //modelo de compra
                        
                            var obj={};
                            obj.regiao= $(customerId[0].childNodes[0]).val()
                            obj.persornalizar_1= $(customerId2[0].childNodes[0]).val()
                            obj.personalizar_2= $(customerId3[0].childNodes[0]).val()
                            obj.campanha=$(customerId4[0].childNodes[0]).val();
                            obj.publico_alvo=$(customerId5[0].childNodes[0]).val();
                            obj.objetivo= select6;
                            obj.veiculo= select7;
                            obj.canal= select8;
                            obj.formatos= select9;
                            obj.modelos_compra= select10;
                            obj.id= index+1;
                            obj.periodo=$(customerId11[0].childNodes[0]).val();
                            obj.investimento=$(customerId12[0].childNodes[0]).val();
                            //  console.log('obj')
                            arrData.push(obj);
                    }
              })  
         
              agruparTable(arrData)//chama a funcao de agrupoamento
        })
        
    })
    
</script>
@endsection