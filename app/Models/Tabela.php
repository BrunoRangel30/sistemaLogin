<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabela extends Model
{
    use HasFactory;
    protected  $table = 'tabelas';
    protected $guarded = [];
    function create($fields)
    {
        $insert = DB::table('plano')->insert($fields);
        return $insert;
    }
}
