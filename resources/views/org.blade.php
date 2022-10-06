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
        text-align: center;
       
        
    }
    
    #client-plan tr td select option {
       background-color: #5a5855;
    }
    #client-plan .total-linha{
        border-bottom:1px solid #61fb89 !important;
        border-right:1px solid #61fb89 !important;
        border-left:1px solid #61fb89 !important;
    }
    #client-plan tr td i {
        color: #61fb89;
        padding: 2px;
        text-align: center;
        cursor: pointer;
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
    
    #client-plan .dataTables_empty {
        color: #ffffff
    }
    
    .botoes-table button {
        background-color: #61fb89;
        font-size: 0.7em;
        margin-bottom: 15px;
        color: #000;
    }
    
    .cabecalho-table tbody .total-linha td {
        border: none !important;
    }
    
    .cabecalho-table tbody .nomeTotal {
        color: #36601c;
        text-transform: uppercase;
        font-size: 0.9em;
        font-weight: bold;
        text-align: center
    }
    
    .loadding {
        text-align: center;
        position: fixed;
        margin-left: 40%;
        width: 200px;
        margin-top: 40px;
        display: none;
    }
    
    .loadding svg {
        fill: #61fb89;
    }
    .footer-modal{
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    .footer-botao .confirmExclusao {
        background-color: #61fb89 !important;
        border: 1px #61fb89 !important;
    }
    #client-plan .custom-select option{
        border: 2px solid red
    }
   
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
            <div class="col-md-10 col-lg-10 table-responsive" style="position:relative">
                <form class="table-form" action="" method="post">
                    <table id="client-plan" class="table table-bordered cabecalho-table" style="position:absolute">
                        <div class="botoes-table">
                            <button id="addRow"  type="button" name="create_record" id="create_record" class="btn btn-success"> <i class="bi bi-plus-square"></i>  <b>Add Linha</b></button>
                            <button id="consolidar" type="button" name="create_record" id="create_record" class="btn btn-success"> <i class="bi bi-plus-square"></i>  <b>Consolidar</b></button>
                            <button id="salvarDados" type="submit" name="create_record" id="create_record" class="btn btn-success"> <i class="bi bi-plus-square"></i>  <b>Salvar</b></button>
                        </div>
                        <div style="border: 2px solid #36601c; position:absolute; z-index:2; left: 1949px; top: 10px;">
                          
                            <input  readonly="readonly" style="background-color:#000;color:#36601c;text-align:center;width: 172px;font-weight: bold;"id="total-tabela" class="currency" style="color: #FFFF">
                            
                        </div>
                        <thead>
                            <tr>
                                <th>Região</th>
                                <th><input style="text-align: center;" type="text" id="personalizar1-col"></th>
                                <th><input  style="text-align: center;" type="text" id="personalizar2-col"></th>
                                <th>Campanha</th>
                                <th>Público-alvo</th>
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
                <div class="loadding">
                    <svg width="50" height="50" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><style>.spinner_zWVm{animation:spinner_5QiW 1.2s linear infinite,spinner_PnZo 1.2s linear infinite}.spinner_gfyD{animation:spinner_5QiW 1.2s linear infinite,spinner_4j7o 1.2s linear infinite;animation-delay:.1s}.spinner_T5JJ{animation:spinner_5QiW 1.2s linear infinite,spinner_fLK4 1.2s linear infinite;animation-delay:.1s}.spinner_E3Wz{animation:spinner_5QiW 1.2s linear infinite,spinner_tDji 1.2s linear infinite;animation-delay:.2s}.spinner_g2vs{animation:spinner_5QiW 1.2s linear infinite,spinner_CMiT 1.2s linear infinite;animation-delay:.2s}.spinner_ctYB{animation:spinner_5QiW 1.2s linear infinite,spinner_cHKR 1.2s linear infinite;animation-delay:.2s}.spinner_BDNj{animation:spinner_5QiW 1.2s linear infinite,spinner_Re6e 1.2s linear infinite;animation-delay:.3s}.spinner_rCw3{animation:spinner_5QiW 1.2s linear infinite,spinner_EJmJ 1.2s linear infinite;animation-delay:.3s}.spinner_Rszm{animation:spinner_5QiW 1.2s linear infinite,spinner_YJOP 1.2s linear infinite;animation-delay:.4s}@keyframes spinner_5QiW{0%,50%{width:7.33px;height:7.33px}25%{width:1.33px;height:1.33px}}@keyframes spinner_PnZo{0%,50%{x:1px;y:1px}25%{x:4px;y:4px}}@keyframes spinner_4j7o{0%,50%{x:8.33px;y:1px}25%{x:11.33px;y:4px}}@keyframes spinner_fLK4{0%,50%{x:1px;y:8.33px}25%{x:4px;y:11.33px}}@keyframes spinner_tDji{0%,50%{x:15.66px;y:1px}25%{x:18.66px;y:4px}}@keyframes spinner_CMiT{0%,50%{x:8.33px;y:8.33px}25%{x:11.33px;y:11.33px}}@keyframes spinner_cHKR{0%,50%{x:1px;y:15.66px}25%{x:4px;y:18.66px}}@keyframes spinner_Re6e{0%,50%{x:15.66px;y:8.33px}25%{x:18.66px;y:11.33px}}@keyframes spinner_EJmJ{0%,50%{x:8.33px;y:15.66px}25%{x:11.33px;y:18.66px}}@keyframes spinner_YJOP{0%,50%{x:15.66px;y:15.66px}25%{x:18.66px;y:18.66px}}</style><rect class="spinner_zWVm" x="1" y="1" width="7.33" height="7.33"/><rect class="spinner_gfyD" x="8.33" y="1" width="7.33" height="7.33"/><rect class="spinner_T5JJ" x="1" y="8.33" width="7.33" height="7.33"/><rect class="spinner_E3Wz" x="15.66" y="1" width="7.33" height="7.33"/><rect class="spinner_g2vs" x="8.33" y="8.33" width="7.33" height="7.33"/><rect class="spinner_ctYB" x="1" y="15.66" width="7.33" height="7.33"/><rect class="spinner_BDNj" x="15.66" y="8.33" width="7.33" height="7.33"/><rect class="spinner_rCw3" x="8.33" y="15.66" width="7.33" height="7.33"/><rect class="spinner_Rszm" x="15.66" y="15.66" width="7.33" height="7.33"/></svg>
                    <p class="pt-3"><b style="color: #FFF;">Processando...</b></p>
                </div>
            </div>
        </div>

    </div>
    <!-- Modal -->
    <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                   <!-- <h5 class="modal-title" id="exampleModalLabel">Exclusao</h5>-->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
                </div>
                <div class="modal-body">
                    <p style="text-align: center">Deseja confirmar a exclusão deste item?</p>
                </div>
                <div class="modal-footer footer-modal footer-botao">
                    <button type="button" class="btn btn-secondary ml-4" data-dismiss="modal">Não</button>
                    <button type="button" class="btn btn-primary confirmExclusao ml-4">Sim</button>
                </div>
            </div>
        </div>
    </div>
    <input id="data-route-url-table" type="hidden" data-route-url-table="{{ route('planoTable') }}">
    <input id="data-route-url-post-table" type="hidden" data-route-url-post-table="{{ route('planoTableStore') }}">
    <input id="data-cliente-id" type="hidden" data-cliente-id="{{ $org->fk_cliente }}">
    <input id="show-table" type="hidden" show-table="{{ route('showTable') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input id="data-delete-line" type="hidden" data-delete-line="{{ route('deleteLine') }}">
</div>
<!--<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" integrity="" crossorigin="anonymous">

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" integrity="" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" integrity="" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/3.25.2/minified.js" integrity="sha512-yHLAgovfc/zAwDgU0iMrEg2NtpJJctpOFIAHVpqVm7qOumLjLi9LhX7gvOwZp7sn70yjpP+BqxUGmV+J3fdIVg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.13.6/underscore-min.js" integrity="sha512-2V49R8ndaagCOnwmj8QnbT1Gz/rie17UouD9Re5WxbzRVUGoftCu5IuqqtAM9+UC3fwfHCSJR1hkzNQh/2wdtg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    //ajax
    function getDataSppinner(url, data, div) {
        //console.log(data,'data')
        return new Promise(function(resolve, reject) {
            return request = $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $("input[name=_token]").val()
                },
                type: 'POST',
                // dataType: 'json',
                url: url,
                beforeSend: function() {
                    $(`.${div}`).show();
                    $('#client-plan').css('opacity', '0.1')
                },
                complete: function() {
                    $(`.${div}`).hide();
                    $('#client-plan').css('opacity', '1')
                },
                data: data,
                success: resolve,
                error: reject
            });
        });
    }
    //constroi as opções dos drop
    function getdrop(item, id, index) {
        // console.log(index,'item')
        let drop = `<select onchange="selectFunction(this)" name ="${id}*select" id="${id}-${index}" class="custom-select">`
        item.map(function(i, j) {
            drop += `<option onclick="selectDrop(this)" value="${i.replace(/\s/g, '')}" data-input="${id}-${index}" class='selectDrop pt-3'>${i}</option>`
        })
        drop += `</select>`
        return drop
    }
    //retona os select
    function returnDrop(dados) {
        let idDrop = dados.id.split('/')
        let idDrop2 = idDrop[1].split('-')
        switch (idDrop2[0]) {
            case 'objetivo':
                $(`#table-${idDrop[1]} input`).remove()
                $(`#table-${idDrop[1]} span`).remove()
                drop = getdrop(['Alcance', 'Reconhecimento', 'Tráfeco', 'Conversões', 'Personalizar'], 'objetivo', idDrop2[1])
                $(`#table-${idDrop[1]}`).append(drop)
                break;
            case 'veiculo':
                // console.log('veiuclo')
                $(`#table-${idDrop[1]} input`).remove()
                $(`#table-${idDrop[1]} span`).remove()
                drop = getdrop(['Google', 'Meta', 'Linkedin', 'Twitter', 'Personalizar'], 'veiculo', idDrop2[1])
                $(`#table-${idDrop[1]}`).append(drop)
                break;
            case 'canal':
                $(`#table-${idDrop[1]} input`).remove()
                $(`#table-${idDrop[1]} span`).remove()
                drop = getdrop(['Search', 'Display', 'Youtube', 'Facebook', 'Instagram', 'Linkedin', 'Personalizar'], 'canal', idDrop2[1])
                $(`#table-${idDrop[1]}`).append(drop)
                    //  console.log('canal')
                break;
            case 'formatos':
                $(`#table-${idDrop[1]} input`).remove()
                $(`#table-${idDrop[1]} span`).remove()
                drop = getdrop(['Texto', 'Banner', 'Vídeo', 'Push Notification', 'Imagem única', 'Carrossel', 'Personalizar'], 'formatos', idDrop2[1])
                $(`#table-${idDrop[1]}`).append(drop)
                    //console.log('formmaro')
                break;
            case 'modelos_de_compra':
                $(`#table-${idDrop[1]} input`).remove()
                $(`#table-${idDrop[1]} span`).remove()
                drop = getdrop(['CPM', 'CPC', 'CPV', 'CPE', 'CPL', 'CPA', 'Personalizar'], 'modelos_de_compra', idDrop2[1])
                $(`#table-${idDrop[1]}`).append(drop)
                break;
            default:
        }
    }
    //colica a cmapo para edicao da opcao personalizar
    function selectFunction(dados) {
        // console.log(dados.id,'dspds')
        let option = $(`#${dados.id} option:selected`).text()
        input = ''
        let name
            // console.log(option,'opt')
        if (option == 'Personalizar') {
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

                //salvar as linhas
                $(".table-form").submit(function(event) {
                    let url = $("#data-route-url-post-table").attr('data-route-url-post-table')
                    let data = $(this).serializeArray()
                    let col1
                    let col2
                    // console.log(data,'data')
                    event.preventDefault();
                    result2 = []
                        //  colunas =[]
                    data.forEach(function(element) {
                            if (element['name'] == 'id')
                                result2.push([])
                            result2[result2.length - 1].push(element)
                        })
                        //colunas 
                    $('#client-plan thead tr').each(function() {
                        col1 = $(this).find("#personalizar1-col");
                        col2 = $(this).find("#personalizar2-col");
                    })
                    let payload = {
                            dados: result2,
                            colunas: [
                                col1 = $(`#${col1[0].id}`).val(),
                                col2 = $(`#${col2[0].id}`).val()
                            ],
                            idCliente: $("#data-cliente-id").attr('data-cliente-id')
                        }
                        //console.log(payload.colunas,'teste')
                    resultAjax = getDataSppinner(url, payload, 'loadding') //grava no banco
                    resultAjax.then(function() {
                        povoarTable() //renderiza a tabela
                    })

                });

                //adicionar linha
                $('#addRow').on('click', function() {
                    $("table .dataTables_empty").hide()
                        //var index = $("#client-plan tbody tr:last-child").index() ;
                    console.log(idTable, 'idTable+1')
                    idTable += 1;
                    console.log(idTable, 'idTable+1')
                    var row = '<tr>' +
                        '<input type="hidden"  name="id" value=' + idTable + '>' +
                        '<td id="table-regiao-' + idTable + '"><input type="text" class="form-control" name="regiao" id="regiao"></td>' +
                        '<td><input type="text" class="form-control" name="personalizar_1" id="personalizar_1"></td>' +
                        '<td><input type="text" class="form-control" name="personalizar_2" id="personalizar_2"></td>' +
                        '<td><input type="text" class="form-control" name="campanha" id="campanha"></td>' +
                        '<td><input type="text" class="form-control" name="publico_alvo" id="publico_alvo"></td>' +
                        '<td id="table-objetivo-' + idTable + '">' + getdrop(['Alcance', 'Reconhecimento', 'Tráfeco', 'Conversões', 'Personalizar'], 'objetivo', idTable) + '</td>' +
                        '<td id="table-veiculo-' + idTable + '">' + getdrop(['Google', 'Meta', 'Linkedin', 'Twitter', 'Personalizar'], 'veiculo', idTable) + '</td>' +
                        '<td id="table-canal-' + idTable + '">' + getdrop(['Search', 'Display', 'Youtube', 'Facebook', 'Instagram', 'Linkedin', 'Personalizar'], 'canal', idTable) + '</td>' +
                        '<td id="table-formatos-' + idTable + '">' + getdrop(['Texto', 'Banner', 'Vídeo', 'Push Notification', 'Imagem única', 'Carrossel', 'Personalizar'], 'formatos', idTable) + '</td>' +
                        '<td id="table-modelos_de_compra-' + idTable + '">' + getdrop(['CPM', 'CPC', 'CPV', 'CPE', 'CPL', 'CPA', 'Personalizar'], 'modelos_de_compra', idTable) + '</td>' +
                        '<td><input type="text" class="form-control" name="periodo" id="periodo"></td>' +
                        '<td><span style="color:#FFF; position:absolute; margin-top: 13px;z-index:1">R$</span><input pattern="[0-9]+([,\.][0-9]+)?" style="width:150px" step="0.01" type="number" value="" type="text" class="form-control" name="investimneto" id="investimento"></td>' +
                        `<td><i class='fas fa-clone duplicar'></i><i class='fas fa-trash-alt delete'></i></td>` +
                        '</tr>';
                    $("#client-plan").append(row);
                })

                // Delete row on delete button click
                $(document).on("click", ".delete", function() {
                    $(this).parents("tr").remove();
                });
                $(document).on("click", ".deleteConsolidar", function() {
                    $(this).parents("tr").remove();
                    consolidarTabela()
                })
                 
                $(document).on("click", ".deleteBanco", function() {
                        $('#modalDelete').modal('show')
                        let url = $("#data-delete-line").attr('data-delete-line')
                        let idDelete = $(this)[0].id
                        parteId = idDelete.split('-')
                        payload = {
                            id: parteId[1],
                        }
                        $(document).on("click", ".confirmExclusao", function() {
                            console.log(payload,'payload')
                            resultAjax = getDataSppinner(url, payload, 'loadding') //grava no banco
                            resultAjax.then(function() {
                                $('#modalDelete').modal('hide')
                                povoarTable() //renderiza a tabela
                            })
                        })
                })
                //atualizar o drop 
                function getdropUp(item, id, index, select) {
                    let drop = `<select onchange="selectFunction(this)" name ="${id}*select" id="${id}-${index}" class="custom-select">`
                    item.map(function(i, j) {
                        if (i.replace(/\s/g, '') == select) {
                            // console.log(i,select,'teste')
                            drop += `<option selected onclick="selectDrop(this)" value="${i.replace(/\s/g, '')}" data-input="${id}-${index}" class='selectDrop pt-3'>${i}</option>`
                        } else {
                            drop += `<option  onclick="selectDrop(this)" value="${i.replace(/\s/g, '')}" data-input="${id}-${index}" class='selectDrop pt-3'>${i}</option>`
                        }
                    })
                    drop += `</select>`
                    return drop
                }
                //retorna htm de um linha
                function lineHTML(objeto) {
                    var row = '<tr>' +
                        '<input type="hidden"  name="id" value=' + objeto.id + '>' +
                        '<td><input value="' + objeto.regiao + '" type="text" class="form-control" name="regiao" id="regiao"></td>' +
                        '<td><input value="' + objeto.personalizar_1 + '" type="text" class="form-control" name="personalizar_1" id="personalizar_1"></td>' +
                        '<td><input value="' + objeto.personalizar_2 + '" type="text" class="form-control" name="personalizar_2" id="personalizar_2"></td>' +
                        '<td><input value="' + objeto.campanha + '" type="text" class="form-control" name="campanha" id="campanha"></td>' +
                        '<td><input value="' + objeto.publico_alvo + '" type="text" class="form-control" name="publico_alvo" id="publico_alvo"></td>' +
                        '<td id="table-objetivo-' + objeto.id + '">' + objeto.objetivo + '</td>' +
                        '<td id="table-veiculo-' + objeto.id + '">' + objeto.veiculo + '</td>' +
                        '<td id="table-canal-' + objeto.id + '">' + objeto.canal + '</td>' +
                        '<td id="table-formatos-' + objeto.id + '">' + objeto.formatos + '</td>' +
                        '<td id="table-modelos_de_compra-' + objeto.id + '">' + objeto.modelos + '</td>' +
                        '<td><input value="' + objeto.periodo + '" type="text" class="form-control" name="periodo" id="periodo"></td>' +
                        '<td><span style="color:#FFF; position:absolute; margin-top: 13px;z-index:1">R$</span><input pattern="[0-9]+([,\.][0-9]+)?" style="width:150px" step="0.01" type="number" value="'+ objeto.investimento + '" type="text" class="form-control" name="investimneto" id="investimento"></td>' +
                        '<td><i class="fas fa-clone duplicar"></i><i class="fas fa-trash-alt delete"></i></td>' +
                        '</tr>';
                    return row;
                }

                //duplica uma linha 
                $(document).on("click", ".duplicar", function() {
                    let row
                    row = $(this).parents("tr").clone()
                    idTable += 1;
                    var var1 = row.find("td").eq(0).html() //regiao
                    var var2 = row.find("td").eq(1).html() //persinalizar_1
                    var var3 = row.find("td").eq(2).html() //personalizar_2
                    var var4 = row.find("td").eq(3).html() //campanha
                    var var5 = row.find("td").eq(4).html() //publico alvo
                    var var6 = row.find("td").eq(5); //objetivo
                    var var7 = row.find("td").eq(6); //veiculo
                    var var8 = row.find("td").eq(7); //canal
                    var var9 = row.find("td").eq(8); //formatos
                    var var10 = row.find("td").eq(9); //modelos
                    var var11 = row.find("td").eq(10).html() //periodo
                    var var12 = row.find("td").eq(11) //investimento
                  
                    var6[0].childNodes[0].type == 'text' ? type6 = '<input value="' + $(var6[0].childNodes[0]).val() + '" name="objetivo*input" type="text" class="form-control"><span id="drop/objetivo-' + idTable + '"  onclick="returnDrop(this)"><i class="fas fa-undo"></i></span>' : type6 = getdropUp(['Alcance', 'Reconhecimento', 'Tráfeco', 'Conversões', 'Personalizar'], 'objetivo', idTable, $(`#${var6[0].childNodes[0].id} option:selected`).val()); //objetivo
                    var7[0].childNodes[0].type == 'text' ? type7 = '<input value="' + $(var7[0].childNodes[0]).val() + '" name="veiculo*input" type="text" class="form-control"><span id="drop/veiculo-' + idTable + '"  onclick="returnDrop(this)"><i class="fas fa-undo"></i></span>' : type7 = getdropUp(['Google', 'Meta', 'Linkedin', 'Twitter', 'Personalizar'], 'veiculo', idTable, $(`#${var7[0].childNodes[0].id} option:selected`).val()); //veiculo
                    var8[0].childNodes[0].type == 'text' ? type8 = '<input value="' + $(var8[0].childNodes[0]).val() + '" name="canal*input" type="text" class="form-control"><span id="drop/canal-' + idTable + '"  onclick="returnDrop(this)"><i class="fas fa-undo"></i></span>' : type8 = getdropUp(['Search', 'Display', 'Youtube', 'Facebook', 'Instagram', 'Linkedin', 'Personalizar'], 'canal', idTable, $(`#${var8[0].childNodes[0].id} option:selected`).val()); //canal
                    var9[0].childNodes[0].type == 'text' ? type9 = '<input value="' + $(var9[0].childNodes[0]).val() + '" name="formatos*input" type="text" class="form-control"><span id="drop/formatos-' + idTable + '"  onclick="returnDrop(this)"><i class="fas fa-undo"></i></span>' : type9 = getdropUp(['Texto', 'Banner', 'Vídeo', 'Push Notification', 'Imagem única', 'Carrossel', 'Personalizar'], 'formatos', idTable, $(`#${var9[0].childNodes[0].id} option:selected`).val()); //formatos
                    var10[0].childNodes[0].type == 'text' ? type10 = '<input value="' + $(var10[0].childNodes[0]).val() + '" name="modelos_de_compra*input" type="text" class="form-control"><span id="drop/modelos_de_compra-' + idTable + '"  onclick="returnDrop(this)"><i class="fas fa-undo"></i></span>' : type10 = getdropUp(['CPM', 'CPC', 'CPV', 'CPE', 'CPL', 'CPA', 'Personalizar'], 'modelos_de_compra', idTable, $(`#${var10[0].childNodes[0].id} option:selected`).val()); //modelos

                    var obj = {};
                    obj.regiao = $(var1).val();
                    obj.personalizar_1 = $(var2).val();
                    obj.personalizar_2 = $(var3).val();
                    obj.campanha = $(var4).val();
                    obj.publico_alvo = $(var5).val();
                    obj.objetivo = type6;
                    obj.veiculo = type7;
                    obj.canal = type8;
                    obj.formatos = type9;
                    obj.modelos = type10;
                    obj.periodo = $(var11).val();
                    obj.investimento =  $(var12[0].childNodes[1]).val();
                    obj.id = idTable;
                    $("#client-plan").append(lineHTML(obj));

                });

                //constroi a tabela (HTML)
                function construirHtmltable(item, typeDelete) {
                    //console.log(item,'iem')
                   // console.log(typeDelete, 'typeDelete')
                    typeDelete == 1 ? action = `<i class="fas fa-clone duplicar"></i><i class="fas fa-trash-alt deleteConsolidar"></i>` : action = `<i class="fas fa-clone duplicar"></i><i id="delete-${item.id}" class="fas fa-trash-alt deleteBanco"></i>`
                    let type
                        //objetivo
                    type = item.objetivo.split("*")
                    type[1] == 'select' ? objetivo = getdropUp(['Alcance', 'Reconhecimento', 'Tráfeco', 'Conversões', 'Personalizar'], 'objetivo', item.id, type[0]) : objetivo = '<input value="' + type[0] + '" name="objetivo*input" type="text" class="form-control"><span id="drop/objetivo-' + item.id + '"  onclick="returnDrop(this)"><i class="fas fa-undo"></i></span>'
                        //veiculo
                    type2 = item.veiculo.split("*")
                    type2[1] == 'select' ? veiculo = getdropUp(['Google', 'Meta', 'Linkedin', 'Twitter', 'Personalizar'], 'veiculo', item.id, type2[0]) : veiculo = '<input value="' + type2[0] + '" name="veiculo*input" type="text" class="form-control"><span id="drop/veiculo-' + item.id + '"  onclick="returnDrop(this)"><i class="fas fa-undo"></i></span>'
                        //canal
                    type3 = item.canal.split("*")
                    type3[1] == 'select' ? canal = getdropUp(['Search', 'Display', 'Youtube', 'Facebook', 'Instagram', 'Linkedin', 'Personalizar'], 'canal', item.id, type3[0]) : canal = '<input value="' + type3[0] + '" name="canal*input" type="text" class="form-control"><span id="drop/canal-' + item.id + '"  onclick="returnDrop(this)"><i class="fas fa-undo"></i></span>'
                        //formatos
                    type4 = item.formatos.split("*")
                        // console.log(type4[1],'tipo4')
                    type4[1] == 'select' ? formato = getdropUp(['Texto', 'Banner', 'Vídeo', 'Push Notification', 'Imagem única', 'Carrossel', 'Personalizar'], 'formatos', item.id, type4[0]) : formato = '<input value="' + type4[0] + '" name="formatos*input" type="text" class="form-control"><span id="drop/formatos-' + item.id + '"  onclick="returnDrop(this)"><i class="fas fa-undo"></i></span>'
                        //modelos de compra
                    type5 = item.modelos_compra.split("*")
                    type5[1] == 'select' ? modelo = getdropUp(['CPM', 'CPC', 'CPV', 'CPE', 'CPL', 'CPA', 'Personalizar'], 'modelos_de_compra', item.id, type5[0]) : modelo = '<input value="' + type5[0] + '" name="modelos_compra*input" type="text" class="form-control"><span id="drop/modelos_de_compra-' + item.id + '"  onclick="returnDrop(this)"><i class="fas fa-undo"></i></span>'
                   // investimento =  item.investimento
                    //investimento = item.investimento.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
                    var row = '<tr>' +
                                    '<input type="hidden"  name="id" value=' + item.id + '>' +
                                    '<td id="table-regiao-' + item.id + '"><input value="' + item.regiao + '" type="text" class="form-control" name="regiao" id="regiao"></td>' +
                                    '<td><input value="' + item.persornalizar_1 + '" type="text" class="form-control" name="personalizar_1" id="personalizar_1"></td>' +
                                    '<td><input value="' + item.personalizar_2 + '" type="text" class="form-control" name="personalizar_2" id="personalizar_2"></td>' +
                                    '<td><input value="' + item.campanha + '" type="text" class="form-control" name="campanha" id="campanha"></td>' +
                                    '<td><input value="' + item.publico_alvo + '" type="text" class="form-control" name="publico_alvo" id="publico_alvo"></td>' +
                                    '<td id="table-objetivo-' + item.id + '">' + objetivo + '</td>' +
                                    '<td id="table-veiculo-' + item.id + '">' + veiculo + '</td>' +
                                    '<td id="table-canal-' + item.id + '">' + canal + '</td>' +
                                    '<td id="table-formatos-' + item.id + '">' + formato + '</td>' +
                                    '<td id="table-modelos_de_compra-' + item.id + '">' + modelo + '</td>' +
                                    '<td><input value="' + item.periodo + '" type="text" class="form-control" name="periodo" id="periodo"></td>' +
                                    '<td><span style="color:#FFF; position:absolute; margin-top: 13px;z-index:1">R$</span><input pattern="[0-9]+([,\.][0-9]+)?" style="width:150px" step="0.01" type="number" value="'+ item.investimento + '" type="text" class="form-control" name="investimneto" id="investimento"></td>' +
                                    '<td>' + action + '</td>' +
                                '</tr>';
                    return row;
                }
                //constroi com dados salvos do banco
                function povoarTable() {
                    //chamar o ajax
                    let typeDelete = 0 //delete banco
                    let idCli = $("#data-cliente-id").attr('data-cliente-id')
                    let url = $("#show-table").attr('show-table')
                    data = {
                        id: idCli
                    }
                    result = getDataSppinner(url, data, 'loadding')
                    result.then(function(data) {
                        //console.log(data.id, 'id')
                            //  console.log(data.tabela.label_1,'data')
                            // atualiza as colunas variaveis
                        $('#client-plan thead tr #personalizar1-col').attr('value', data.tabela.label_1)
                        $('#client-plan thead tr #personalizar2-col').attr('value', data.tabela.label_2)
                        data.id == null ? idTable = 0 : idTable = data.id.id //retorna a quantidade de linhas do banco
                       // console.log(idTable, 'idTable')
                            //Limpar a tabela
                        $('#client-plan tbody > tr').remove(); //limpa a tabela
                        if (data.plano.length > 0) {
                            agruparTable(data.plano, typeDelete) //agrupa a tabela
                        }
                    })

                }
                povoarTable() //chamada inicial para renderizar a tabela
                    //agrupa a tabela
                function agruparTable(data, typeDelete) {
                    var totalTabela = 0
                    
                    var sum = function(t, n) {
                        return parseFloat(t) + parseFloat(n);
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
                    _.mapObject(result2, function(value, key) {
                            value.linhas.map(function(item, j) {
                                $("#client-plan").append(construirHtmltable(item, typeDelete)); //insere a linha
                            })
                            let key2 = key.split('*')
                           // totalParcial=  value.total.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
                            var rowTotal = '<tr class="total-linha">' +
                                '<td></td>' + //offset
                                '<td></td>' + //offset
                                '<td></td>' +
                                '<td></td>' +
                                '<td><div class="nomeTotal">TOTAL ' + key2[0] + '</div></td>' +
                                '<td></td>' +
                                '<td></td>' +
                                '<td></td>' +
                                '<td></td>' +
                                '<td></td>' +
                                '<td></td>' +
                                '<td><div class="nomeTotal">R$ ' + parseFloat(value.total).toFixed(3) + '</div></td>' +
                                '<td></td>' +
                                '</tr>'
                            $("#client-plan").append(rowTotal); //insere a linha
                            totalTabela+=value.total
                          //  console.log(totalTabela,'totalTabela')
                            // console.log(key,'key')
                        })
                        $('#total-tabela').val(`R$ ${parseFloat(totalTabela).toFixed(3)}`);
                        //pausar para retirar o temporizador                  
                    setTimeout(function() {
                        $(`.loadding`).hide();
                        $('#client-plan').css('opacity', '1')
                    }, 200);

                }

                function consolidarTabela() {
                    let typeDelete = 1 //delete tela
                    var arrData = []
                    $('#client-plan tbody tr').each(function(index, j) {
                                var totalLinha = $(this).hasClass('total-linha'); //regiao
                                //não ter as linhas do total
                                if (!totalLinha) {
                                    var id = $(this).find("input").val(); //regiao
                                    var customerId = $(this).find("td").css('id', `table-regiao-${index}`).eq(0); //regiao
                                    var customerId2 = $(this).find("td").eq(1); //personalizar_1'
                                    var customerId3 = $(this).find("td").eq(2); //persornalizar_2
                                    var customerId4 = $(this).find("td").eq(3); //campanha
                                    var customerId5 = $(this).find("td").eq(4); //publico
                                    var customerId6 = $(this).find("td").eq(5); //objetivo
                                    var customerId7 = $(this).find("td").eq(6); //veiculo
                                    var customerId8 = $(this).find("td").eq(7); //canal
                                    var customerId9 = $(this).find("td").eq(8); //formatos
                                    var customerId10 = $(this).find("td").eq(9); //modelos
                                    var customerId11 = $(this).find("td").eq(10); //periodo
                                    var customerId12 = $(this).find("td").eq(11); //investimento
                                    
                                    //  console.log(customerId ,'teste')
                            customerId6[0].childNodes[0].type == 'text' ? select6 = `${$(customerId6[0].childNodes[0]).val()}*input` : select6 = `${$(`#${customerId6[0].childNodes[0].id} option:selected`).val()}*select` ; //objetivo
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
                            obj.id= id;
                            obj.delete= 0;
                            obj.periodo=$(customerId11[0].childNodes[0]).val();
                            obj.investimento=$(customerId12[0].childNodes[1]).val();
                            //  console.log('obj')
                            arrData.push(obj);
                    }
            })  
        
            agruparTable(arrData,typeDelete)//chama a funcao de agrupoamento
        }
        //consolida a tabela para visualização do usuario
        $(document).on("click", "#consolidar", function(){
            //carrega o loadding
            $(`.loadding`).show();
            $('#client-plan').css('opacity','0.1')
            consolidarTabela()
        })
    })
  
</script>
@endsection