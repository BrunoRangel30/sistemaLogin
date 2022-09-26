<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Plano extends Model
{
    use HasFactory;
    protected  $table = 'plano';
    protected $guarded = [];
  //  protected static $alias = null;
  //  protected static $primaryKey = 'id';

     function create($fields)
    {
        
        $insert = DB::table('plano')->insert($fields);
        return $insert;
    }
}
