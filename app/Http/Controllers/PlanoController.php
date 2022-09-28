<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Organizacao;
use App\Models\Plano;
use App\Models\Tabela;

class PlanoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   /* protected $org;
   // protected $auth;
    public function __construct()
    {
        $org = new Organizacao();
        $this->org = $org;
       
    }*/
    protected $org;
    protected $plano;
    public function __construct()
    {
        $org = new Organizacao();
        $this->org = $org;
        $plano = new plano();
        $this->plano = $plano;
    }
    public function index(Request $request)
    {
       $org = $this->org->getCliOrg($request->id_cliente);
     //  dd($org);
        $idCliente = $request->id_cliente;
        return view('org', compact('org','idCliente'));
    }

    public function getTableAjax(Request $request)
    {
        $orgResul= $this->org->getPlaOrg($request->id);
        $org['data'] = $orgResul;
        return $org;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function  FormatarData($data){
        $date = date_create(date($data));
        $dataFinal = date_format($date, 'Y-m-d');
        return $dataFinal;
    }
    public function store(Request $request)
    {
      //  dd($request->idCliente);
         $tabela = Tabela::firstOrNew(['fk_cliente' => $request->idCliente]); //verifica se o registo ja existe
         $tabela->label_1 = $request->colunas[0];
         $tabela->label_2 = $request->colunas[1];
         $tabela->save();
        foreach ($request->dados as  $key=>$valor){
             // var_dump($request->dados[$key][0]['value']);
            $plano = Plano::firstOrNew(['id' => $request->dados[$key][0]['value']]); //verifica se o registo ja existe
           //dd($plano);
            foreach ($valor as $item){
                $pieces = explode("*", $item['name']);
              var_dump($pieces[0]);
                switch ($pieces[0]) {
                    case 'regiao':
                        $plano->regiao = $item['value'];
                        break;
                    case 'personalizar_1':
                        $plano->persornalizar_1 = $item['value'];
                        break;
                    case 'personalizar_2':
                        $plano->personalizar_2 = $item['value'];
                        break;
                    case 'campanha':
                        $plano->campanha = $item['value'];
                        break;
                    case 'campanha':
                        $plano->campanha = $item['value'];
                        break;
                    case 'publico_alvo':
                        $plano->publico_alvo = $item['value'];
                        break;
                    case 'objetivo':
                        $plano->objetivo = $item['value'].'*'.$pieces[1];
                        break;
                    case 'veiculo':
                        $plano->veiculo = $item['value'].'*'.$pieces[1];
                        break;
                    case 'canal':
                        $plano->canal = $item['value'].'*'.$pieces[1];
                        break;
                    case 'formatos':
                        $plano->formatos = $item['value'].'*'.$pieces[1];
                        break;
                    case 'periodo':
                        $plano->periodo = $item['value'];
                        break;
                    case 'modelos_de_compra':
                        $plano->modelos_compra = $item['value'].'*'.$pieces[1];
                        break;
                    case 'investimneto':
                        $plano->investimento =  floatval($item['value']);
                        break;
                     default:

                    }
            $plano->fk_cliente = 1;
            //  $plano->personalizar = $valor['name'] == "regiao" ? $valor['value'] : '';
        }
        $plano->save();
       // dd($plano);
       // foreach($request )
       /* $plano = Plano::firstOrNew(['id' => $dado->codigo_ibge]); //verifica se o registo ja existe
       $result =  $this->plano->create($request->data);
       dd($result);*/
    }
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {   //dd($request->id);
        $plano = Plano::where('fk_cliente', $request->id)
               ->get();
       $tabela = Tabela::where('fk_cliente',$request->id)->first();
       $data['plano'] = $plano;
       $data['tabela'] = $tabela;
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
