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
    function selectFunction(dados){
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
             input = `<input type="text" class="form-control" name="${name[0]}*input"><i class="fas fa-undo"></i>`
            
             $(`#table-${dados.id}`).append(input)
            //botao de voltar para o drop
        }
        
    }
    $(document).ready(function() {
          let url = $("#data-route-url-table").attr('data-route-url-table')
          id = $("#data-cliente-id").attr('data-cliente-id')
     
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
                        '<td><input type="text" class="form-control" name="investimneto" id="investimneto"></td>' +
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
                            '<td><input value="'+objeto.investimento+'" type="text" class="form-control" name="investimneto" id="investimento"></td>' +
                            '<td><i class="fas fa-clone duplicar"></i><i class="fas fa-trash-alt"></i></td>'+
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

            var6[0].childNodes[0].type == 'text' ? type6 = '<input value="'+$(var6[0].childNodes[0]).val()+'" name="objetivo*input" type="text" class="form-control">' : type6 = getdropUp(['Alcance','Reconhecimento','Tráfeco','Conversões','Personalizar'],'objetivo', idTable,$(`#${var6[0].childNodes[0].id} option:selected`).val()) ; //objetivo
            var7[0].childNodes[0].type == 'text' ? type7 = '<input value="'+$(var7[0].childNodes[0]).val()+'" name="veiculo*input" type="text" class="form-control">' : type7 = getdropUp(['Google','Meta','Linkedin','Twitter','Personalizar'],'veiculo', idTable,$(`#${var7[0].childNodes[0].id} option:selected`).val()) ; //veiculo
            var8[0].childNodes[0].type == 'text' ? type8 = '<input value="'+$(var8[0].childNodes[0]).val()+'" name="canal*input" type="text" class="form-control">' : type8 = getdropUp(['Search','Display','Youtube','Facebook','Instagram','Linkedin','Personalizar'],'canal', idTable,$(`#${var8[0].childNodes[0].id} option:selected`).val()) ; //canal
            var9[0].childNodes[0].type == 'text' ? type9 = '<input value="'+$(var9[0].childNodes[0]).val()+'" name="formatos*input" type="text" class="form-control">' : type9 = getdropUp(['Texto','Banner','Vídeo','Push Notification','Imagens única','Carrossel','Personalizar'],'formatos', idTable,$(`#${var9[0].childNodes[0].id} option:selected`).val()) ; //formatos
            var10[0].childNodes[0].type == 'text' ? type10 = '<input value="'+$(var10[0].childNodes[0]).val()+'" name="modelos_de_compra*input" type="text" class="form-control">' : type10 = getdropUp(['CPM','CPC','CPV','CPE','CPL','CPA','Personalizar'],'modelos_de_compra', idTable,$(`#${var10[0].childNodes[0].id} option:selected`).val()) ; //modelos
            
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
        //constroi a tabela com os dados do banco
        function construirHtmltable(item){
            //console.log(item,'iem')
            let type
            //objetivo
            type  = item.objetivo.split("*")
            type[1] == 'select'  ?  objetivo = getdropUp(['Alcance','Reconhecimento','Tráfeco','Conversões','Personalizar'],'objetivo',item.id,type[0]) : '<input value="'+type[0]+'" name="objetivo*input" type="text" class="form-control">'
            //veiculo
            type2  = item.veiculo.split("*")
            type2[1] == 'select' ? veiculo = getdropUp(['Google','Meta','Linkedin','Twitter','Personalizar'],'veiculo',item.id, type2[0]) : veiculo ='<input value="'+type2[0]+'" name="veiculo*input" type="text" class="form-control">'
         //   console.log('')
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
              //  console.log(data.tabela.label_1,'data')
               // atualiza as colunas variaveis
                $('#client-plan thead tr #personalizar1-col').attr('value',data.tabela.label_1)
                $('#client-plan thead tr #personalizar2-col').attr('value',data.tabela.label_2)
                data.plano.length == 0 ?  idTable = 0 : idTable= data.plano.length //retorna a quantidade de linhas do banco
                //Limpar a tabela
                $('#client-plan tbody > tr').remove();
                if(data.plano.length > 0){
                    data.plano.map(function(item,j){
                       // console.log(item,'item')
                     //   construir uma funcao o hml para cada
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
                var customerId = $(this).find("td").eq(0);  //regiao
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
                console.log($(customerId[0].childNodes[0]).val() ,'teste')
                customerId6[0].childNodes[0].type == 'text' ? select6 = $(customerId6[0].childNodes[0]).val()  : select6 = $(`#${customerId6[0].childNodes[0].id} option:selected`).val() ; //objetivo
                customerId7[0].childNodes[0].type == 'text' ? select7 = $(customerId7[0].childNodes[0]).val()  : select7 = $(`#${customerId7[0].childNodes[0].id} option:selected`).val() ; //veiculo
                customerId8[0].childNodes[0].type == 'text' ? select8 = $(customerId8[0].childNodes[0]).val()  : select8 = $(`#${customerId8[0].childNodes[0].id} option:selected`).val() ; //canal
                customerId9[0].childNodes[0].type == 'text' ? select9 = $(customerId9[0].childNodes[0]).val()  : select9 = $(`#${customerId9[0].childNodes[0].id} option:selected`).val() ; //formatos
                customerId10[0].childNodes[0].type == 'text' ? select10 = $(customerId10[0].childNodes[0]).val()  : select10 = $(`#${customerId10[0].childNodes[0].id} option:selected`).val() ; //modelo de compra
              
                var obj={};
                  obj.regiao= $(customerId[0].childNodes[0]).val()
                  obj.personalizar_1= $(customerId2[0].childNodes[0]).val()
                  obj.personalizar_2= $(customerId3[0].childNodes[0]).val()
                  obj.campanha=$(customerId4[0].childNodes[0]).val();
                  obj.publico_alvo=$(customerId5[0].childNodes[0]).val();
                  obj.ojetivo= select6;
                  obj.veiculo= select7;
                  obj.canal= select8;
                  obj.formatos= select9;
                  obj.modelos= select10;
                  obj.periodo=$(customerId11[0].childNodes[0]).val();
                  obj.investimento=$(customerId12[0].childNodes[0]).val();
                  console.log('obj')
                  arrData.push(obj);
              })  
         
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