<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Organizacao extends Model
{
    use HasFactory;
    protected $table = 'organizacao';
    public $timestamps = true;
    protected $guarded = [];
     //Retorna a organizacao
     public function getOrg($id){
        $query =  DB::table('organizacao as o')
        ->join ('user_organizacao as us','us.fk_org','=','o.id')
        ->join ('users as u','us.fk_user','=','u.id')
        ->select('u.name as nuser','u.email','o.nome as org', 'o.id as org_id')
        ->where('u.id',$id)
        ->first();
        return  $query;
    }
     //Retorna  cliente de uma org(id org)
     public function getOrgCli($id){
        $query =  DB::table('cliente_org as oc')
        ->join ('organizacao as o','oc.fk_org','=','o.id')
        ->join ('cliente as c','oc.fk_cliente','=','c.id')
        ->select('*')
        ->where('fk_org',$id)
        ->get();
        return  $query;
    }
      //Retorna  org de cliente (id cliente)
      public  function getCliOrg($id){

        $query =  DB::table('cliente_org as oc')
        ->join ('organizacao as o','oc.fk_org','=','o.id')
        ->join ('cliente as c','oc.fk_cliente','=','c.id')
        ->select('*','o.nome as org')
        ->where('fk_cliente',$id)
        ->first();
        return  $query;
    }
    //Retorna  plano de um cliente (id cliente)
    public  function getPlaOrg($id){

        $query =  DB::table('plano')
        ->select('*')
        ->where('fk_cliente',$id)
        ->get();
        return  $query;
    }
}
