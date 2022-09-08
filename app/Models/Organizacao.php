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
        ->select('u.name as nuser','u.email','o.nome as org')
        ->where('u.id',$id)
        ->first();
        return  $query;
    }
}
